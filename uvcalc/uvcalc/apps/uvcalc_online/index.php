<?php

function rm_obj($html,$id) {
	$rm_element = $html->getElementById($id);
	if($rm_element!=NULL){
		$parent_element = $rm_element->parentNode;
		if($parent_element!=NULL){
			$parent_element->removeChild($rm_element);
		}
	}
	return $html;
}

function element_to_obj($element) {
    $obj = array( "tag" => $element->tagName );
    foreach ($element->attributes as $attribute) {
        $obj[$attribute->name] = $attribute->value;
    }
    foreach ($element->childNodes as $subElement) {
        if ($subElement->nodeType == XML_TEXT_NODE) {
            $obj["html"] = $subElement->wholeText;
        }
        else {
            $obj["children"][] = element_to_obj($subElement);
        }
    }
    return $obj;
}

function findStripeCustomer($starting_after,$email){
	
	$customers = Stripe_customer::all(array('starting_after'=>$starting_after,'limit'=>25));
	
	$data = null;
	
	foreach($customers->data as $customer){
		if($customer['email']==$email){
			$data = $customer;
		}
		$starting_after = $customer['id'];
	}
	
	if($data==null && $customers->has_more == true){
		$data = findStripeCustomer($starting_after,$email);
	}
	
	return $data;
	
}

\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('uvcalc_online');

OCP\Util::addScript('uvcalc_online', 'uvcalc_online');
OCP\Util::addStyle('uvcalc_online', 'uvcalc_online');

OCP\JSON::checkAppEnabled('subscription');


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once(dirname(__FILE__) . '/../subscription/appinfo/config.php');

// Get subscription details

$dashboard = new SubscriptionDashboard();

Stripe::setApiKey($dashboard->getSecretKey());

$timestamp = new DateTime();

$id = \OCP\User::getUser();

$customer = findStripeCustomer(null,$id);

if($customer == null){


}

if($customer != null){

	$subscriptions = $customer->subscriptions->all();
					
	$subscription = null;

					
	foreach($subscriptions->data as $s){
		
		if($s->status == "active" || $s->status == "trialing"){				
			$subscription = $s;
		}
										
		
	}

	

}

if($customer !== null && $subscription !== null || OC_User::isAdminUser(OC_User::getUser())){

	$tpl = new OCP\Template("uvcalc_online", "main", "user");
	$tpl_data = $tpl->fetchPage();

	$html = new DOMDocument();
	$html->loadHtml($tpl_data);

	$elements = $subscription['metadata']['remove-features'];

	foreach($elements as $element){
		rm_obj($html,$element);
	}
	
	$newHtml = $html->saveHTML();
	print $newHtml;

}
else{
?>


<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=/apps/subscription/orderform.php">
        <script type="text/javascript">
            window.location.href = "/apps/subscription/orderform.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow the <a href='/apps/subscription/orderform.php'>link.</a>
    </body>
</html>

<?php

}

?>
