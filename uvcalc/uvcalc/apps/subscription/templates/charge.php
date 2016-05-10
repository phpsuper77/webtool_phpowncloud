<?php

 /*************************************************************************
 * 
 * TEKHUS SOLUTIONS CONFIDENTIAL
 * __________________
 * 
 *  [2014] TekHus Solutions d.o.o. 
 *  All Rights Reserved.
 * 
 * NOTICE:  All information contained herein is, and remains
 * the property of TekHus Solutions d.o.o. 
 * The intellectual and technical concepts contained
 * herein are proprietary to TekHus Solutions d.o.o. and may
 * be covered by U.S. and Foreign Patents, patents in process, 
 * and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from TekHus Solutions d.o.o.
 */

//\OCP\User::checkLoggedIn();

function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

 if(isset($_POST['stripeToken'])&&isset($_POST['subscription-id'])&&isset($_POST['stripeEmail'])&&isset($_POST['data-amount'])&&isset($_POST['data-description'])){

	require_once(dirname(__FILE__) . '/../appinfo/config.php');
  
	$user_id = \OCP\User::getUser();
	$new_user = FALSE;
	$user_exists = FALSE;
	
	if($_POST['stripeEmail']==$user_id){
		$user_exists = TRUE;
	}
	else{
		$sql = "SELECT * FROM *PREFIX*users WHERE uid='".$_POST['stripeEmail']."'";
		
		$args = array();

		$query = \OCP\DB::prepare($sql);
		$result = $query->execute($args);
		
		while($row = $result->fetchRow()) {
			$user_exists = TRUE;
		}
	}

	if($user_exists == FALSE ){
		//create a new user with and get user_id
		$pwd = rand_string(8);
		\OC_User::createUser($_POST['stripeEmail'], $pwd);
		$new_user = TRUE;
		$user_id = $_POST['stripeEmail'];
		
		//Email new user information later on in the script
	}
  
    /*
	mysql> describe oc_subscription_types;
	+-----------------+--------------+------+-----+---------+----------------+
	| Field           | Type         | Null | Key | Default | Extra          |
	+-----------------+--------------+------+-----+---------+----------------+
	| id              | bigint(20)   | NO   | PRI | NULL    | auto_increment |
	| name            | varchar(100) | YES  |     | NULL    |                |
	| description     | varchar(255) | YES  |     | NULL    |                |
	| cost            | varchar(255) | YES  |     | NULL    |                |
	| is_time_based   | tinyint(1)   | YES  |     | NULL    |                |
	| term            | varchar(255) | YES  |     | NULL    |                |
	| is_credit_based | tinyint(1)   | YES  |     | NULL    |                |
	| credits         | int(11)      | YES  |     | 0       |                |
	| features        | varchar(1024)| YES  |     | NULL    |                |
	+-----------------+--------------+------+-----+---------+----------------+
	*/
	
	$timestamp = new DateTime();
	
	$subscription = new User_Subscription($user_id, "uvcalc_online", $timestamp);
  
	$sql = "SELECT * FROM *PREFIX*subscription_types WHERE id=".$_POST['subscription-id'];
  
	$args = array();

	$query = \OCP\DB::prepare($sql);
	$result = $query->execute($args);
	
	$subscription->set_subscription_id(-1);
	
	$cost = 0;
	
	$remove_features_id = 0;
	
	while($row = $result->fetchRow()) {
	
		/*
		private $number_credits;
		private $datetime_initial;
		private $datetime_expire;
		private $datetime_now;	
		private $features_available=array();
		*/
		$subscription->set_subscription_id($_POST['subscription-id']);
		$subscription->set_number_credits($row['credits']);
		$subscription->set_datetime_initial($timestamp);
		$subscription->set_datetime_now($timestamp);
		//$subscription->set_datetime_expire($timestamp->add(new DateInterval('P30D')));	
		$subscription->set_datetime_expire($timestamp->add(new DateInterval($row['term'])));
		$cost = $row['cost'];
		$remove_features_id = $row['remove_features_id'];
	
	}
	
	// Check to see if the transaction amount and the posted amounts, less any discounts, 
    // match the price of the subscription. If yes then change price_compliance flag to true.
	
	$price_compliance = FALSE;
	
	if($cost == $_POST['data-amount']){
		$price_compliance = TRUE;
	}

	// Apply any coupon if valid
	if(isset($_POST['uv-couponcode']) && $price_compliance == TRUE){
                $code = $_POST['uv-couponcode'];
		$coupons = $subscription->coupons;
		foreach($coupons as $key=>$value){
                	foreach($value as $coupon){
				if($coupon->code == $code){
					$cost = $cost - ($cost * $coupon->discount * 0.01); 
				}
                        }
                }

	}
	
	if($price_compliance == TRUE){

		$token  = $_POST['stripeToken'];

		$customer = Stripe_Customer::create(array(
			'email' => $_POST['stripeEmail'],
			'card'  => $token
		));

		$charge = Stripe_Charge::create(array(
			'customer' => $customer->id,
			'amount'   => $cost,
			'currency' => 'usd',
			'description' => $_POST['data-description']
		));
		   
		require_once(dirname(__FILE__) . '/../appinfo/config.php');
		
		$sql = "INSERT INTO *PREFIX*subscription_charge(subscription_id,transaction_id,user_id,object,created,livemode,paid,amount,currency,refunded,balance_transaction,failure_message,failure_code,amount_refunded,customer,invoice,description,dispute,statement_description,receipt_email) values(";
		$sql .= $subscription->get_subscription_id().",";
		$sql .= "'".$charge->id."'";
		$sql .= ",'".$user_id."'";
		$sql .= ",'".$charge->object."'";
		$sql .= ",FROM_UNIXTIME(".$charge->created.")";

		if($charge->livemode==TRUE){
			$sql .= ",1";
		}
		else{

			$sql .= ",0";
		}
		$sql .= ",".$charge->paid;
		$sql .= ",".$charge->amount;
		$sql .= ",'".$charge->currency."'";
		if($charge->refunded==TRUE){
			$sql .= ",1";
		}
		else{
			$sql .= ",0";
		}
		$sql .= ",'".$charge->balance_transaction."'";
		$sql .= ",'".$charge->failure_message."'";
		$sql .= ",'".$charge->failure_code."'";
		$sql .= ",".$charge->amount_refunded;
		$sql .= ",'".$charge->customer."'";
		$sql .= ",'".$charge->invoice."'";
		$sql .= ",'".$charge->description."'";
		$sql .= ",'".$charge->dispute."'";
		$sql .= ",'".$charge->statement_description."'";
		$sql .= ",'".$customer->email."')";

		$args = array();

		$query = \OCP\DB::prepare($sql);
		$result = $query->execute($args);
		
		$db_charge_id = \OCP\DB::insertid();

		/*
		| id                | bigint(20)   | NO   | PRI | NULL    | auto_increment |
		| subscription_id   | int(11)      | NO   |     | NULL    |                |
		| charge_id         | int(11)      | NO   |     | NULL    |                |
		| transaction_id    | varchar(255) | YES  |     | NULL    |                |
		| created           | datetime     | YES  |     | NULL    |                |
		| is_time_based     | tinyint(1)   | YES  |     | NULL    |                |
		| term              | datetime     | YES  |     | NULL    |                |
		| startdate         | datetime     | YES  |     | NULL    |                |
		| stopdate          | datetime     | YES  |     | NULL    |                |
		| is_credit_based   | tinyint(1)   | YES  |     | NULL    |                |
		| credits           | int(11)      | YES  |     | 0       |                |
		| credits_used      | int(11)      | YES  |     | 0       |                |
		| credits_remaining | int(11)      | YES  |     | 0       |                |
		| user_id           | varchar(255) | YES  |     | NULL    |                |
		| features          | varchar(2048)| YES  |     | NULL    |                |
		*/
		
		if($charge->paid==1){

			$sql = "INSERT INTO *PREFIX*subscription_instances(";
			$sql.= "subscription_id,";
			$sql.= "user_id,";
			$sql.= "charge_id,";
			$sql.= "transaction_id,";
			$sql.= "created,";
			$sql.= "is_time_based,";
			$sql.= "term,";
			$sql.= "startdate,";
			$sql.= "stopdate,";
			$sql.= "is_credit_based,";
			$sql.= "credits,";
			$sql.= "credits_used,";
			$sql.= "credits_remaining,";
			$sql.= "remove_features_id";

			$sql.= ") VALUES(";

			$sql .= $subscription->get_subscription_id().",";
			$sql .= "'".$user_id."',";
			$sql .= $db_charge_id.",";
			$sql .= "'".$charge->id."',";
			$sql .= "FROM_UNIXTIME(".$charge->created."),";
			$sql.= "1,";
			$sql .= "FROM_UNIXTIME(".$charge->created."),";
			$sql .= "FROM_UNIXTIME(".$charge->created."),";
			$sql .= "FROM_UNIXTIME(".$subscription->get_datetime_expire()->getTimestamp()."),";
			if($subscription->get_number_credits()>0){
				$sql.= "1,";
			}
			else{
				$sql.= "0,";
			}
			$sql.= $subscription->get_number_credits().",";
			$sql.= $subscription->get_number_credits().",";
			$sql.= $subscription->get_number_credits().",";
			$sql.= $remove_features_id;
			$sql.= ")";

			$args = array();

			$query = \OCP\DB::prepare($sql);
				
			try
			{
				$result = $query->execute($args);
			}
			catch ( Doctrine_Connection_Exception $e )
			{
				
				$db_instance_error = $e->getPortableMessage();
			}
			
			$db_instance_id = \OCP\DB::insertid();

			// If all is good send email receipt
			
			require_once('/apps/uvcalc_online/lib/PHPMailer/class.phpmailer.php');
		
			$mail = new PHPMailer(); // defaults to using php "mail()"
			
			$body .= "<h2>Thank you for your order!</h2>";
			$body .= "<p>".$charge->description."</p>";
			$body .= "<p>Amount received: $".($charge->amount/100.00)."</p>";
			
			// If $new_user == TRUE;	
			//Email new user information

			if($new_user == TRUE){
				$body .= "<p>Username: ".$customer->email."</p>";
				$body .= "<p>Password: ".$pwd."</p>";
			}

			$mail->AddReplyTo("noreply@online.uvcalc.com","UVCalc Online");

			$mail->SetFrom('noreply@online.uvcalc.com', 'UVCalc Online');

			$mail->AddReplyTo("noreply@online.uvcalc.com","UVCalc Online");

			$address = $customer->email;
			
			$mail->AddAddress($address, $customer->email);

			$mail->Subject    = "New UVCalc Online Subscription";

			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			//$mail->AddAttachment($scenario['output_file']);      // attachment
			
			$mail->Send();
			
			$msg="<p><h2>Thank you for your subscription purchase</h2><h3>A receipt has been sent to your email address ".$charge->receipt_email."</h3></p><p>If you are a new user your password and username have also been included in the message.</p><p>If you do not see the message arrive within 5 minutes, please check your SPAM folder.</p><p>If you are not already, you can <a href=\"/\">LOGIN HERE</a></p>";
		
		}
		else{
			$msg.="<h2>Transaction error: There was an issue with your attempted purchase. Your card has not been charged. Please try again.</h2>";
		}
	
	}
	else{
		$msg.="<h2>Compliance error: Posted amount does not match purchase price.</h2>";
	}

?>

<html>
<head>
<title>UVCalc Online</title>
<link rel="shortcut icon" href="http://online.uvapplication.com/favicon.ico">
<link rel='stylesheet' href='css/subscription.css' type='text/css' media='all' />

</head>

<body>

<div style="width:100%;display:table;margin-top:25px;">
	<div style="display: table-row">
		<div style="width:25%; display: table-cell;">&nbsp;</div>
		<div style="text-align:center; width:50%; border: solid #990066 1px; border-radius: 25px; display:table-cell;">

			<img src="/core/img/BPIlogo72.png">

			<div class="charge-confirmation">


			<?php

			printf("%s",$msg);

			?>


			</div>
			
		</div>
		<div style="width:25%; display: table-cell;">&nbsp;</div>
	</div>
</div>

</body>
</html>
<?php


}
else{
?>


<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=http://online.uvapplication.com/apps/subscription/subscribe.php">
        <script type="text/javascript">
            window.location.href = "http://online.uvapplication.com/apps/subscription/subscribe.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow the <a href='http://online.uvapplication.com/apps/subscription/subscribe.php'>link.</a>
    </body>
</html>

<?php

}

?>
