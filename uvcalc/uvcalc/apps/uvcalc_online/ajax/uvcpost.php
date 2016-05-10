<?php

OCP\JSON::checkLoggedIn();
OCP\JSON::checkAppEnabled('uvcalc_online');
OCP\JSON::callCheck();


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

function get_default_json_string(){
 
    $json = "{
    \"version\": \"0.1\",
	\"datetime\": \"\",
    \"redis-server\": \"127.0.0.1\",
    \"output_file\":\"/tmp/test.xlsx\",
	\"scenario\":{
		\"calculation\":{
			\"type\":\"frd\",
			\"output_units\":\"wm2\",
			\"point_count_value\":0,
			\"output_radial_resolution\":0.0,
			\"longitudinal_resolution\":0.0,
			\"internal_radial_resolution\":0.0001
		},
		\"reactor\":{
			\"diameter\":0.3,
			\"length\":2.4,
			\"width\":0.0,
			\"height\":0.0,
			\"refraction\":\"on\",
			\"shadowing\":\"off\",
			\"flow_axis\":\"none\",
			\"trans_h_axis\":\"none\",
			\"trans_v_axis\":\"none\",
			\"shape\":\"circular\",
			\"medium\":{
				\"transmittance\":80.00,
				\"transmittance_min\":0.0,
				\"transmittance_max\":0.0,
				\"transmittance_step_value\":0.0,
				\"ri\":1.372,
				\"type\":\"water\",
				\"flow_rate\":200.0,
				\"flow_units\":\"liters-per-min\"
			},
			\"lamptypes\":{
				\"name\":\"Lamp 1\",
				\"lamp_center_nodes\":[{
					\"value\":0.0,
					\"x\":0.0,
					\"y\":0.0,
					\"z\":0.0,
					\"active\":0,
				    \"bulb_power_factor\":1.0
				}],
				\"bulb_power\":240.0,
				\"bulb_efficiency\":30.0,
				\"bulb_pressure\":\"low\",
				\"band_data\":[{
					\"EPT\":0.0,
					\"RLE\":0.0,
					\"LST\":0.0,
					\"GEF\":0.0
				}],
				\"orientation\":\"Z\",
				\"arc_length\":2.0,
				\"sleeve_diameter\":0.02,
				\"sleeve_transmittance\":1.0,
				\"sleeve_RI\":1.516,
				\"sleeve_material\":\"quartz\",
				\"max_radius\":0.0,
				\"max_height\":0.0,
				\"longitudinal_increment\":0.0,
				\"X_stop\":0,
				\"Y_stop\":0
			}

		}
	}
}




";  

    return $json;
    
}
   
function set_json_object($json_string, $scenario){
    
    $json_object = json_decode($json_string);

    $json_object->output_file = $scenario['output_file'];
	$json_object->datetime = time();

    $json_object->scenario->reactor->lamptypes->bulb_power = floatval($scenario['lamp-power'])*1.0;
    $json_object->scenario->reactor->lamptypes->bulb_efficiency = floatval($scenario['lamp-efficiency'])*1.0;
    $json_object->scenario->reactor->lamptypes->arc_length = floatval($scenario['lamp-arc-length']/100.00)*1.0;
    $json_object->scenario->reactor->lamptypes->sleeve_diameter = floatval($scenario['lamp-diameter']/100.00)*1.0;
    $json_object->scenario->reactor->lamptypes->sleeve_material = $scenario['lamp-sleeve-material'];
    $json_object->scenario->reactor->lamptypes->sleeve_RI = floatval($scenario['lamp-sleeve-ri'])*1.0;
    $json_object->scenario->reactor->lamptypes->bulb_pressure = $scenario['lamp-pressure'];

    for($i=0; $i < count($scenario['lamp-coordinate-x']);$i++){    
        $json_object->scenario->reactor->lamptypes->lamp_center_nodes[$i]->x= floatval($scenario['lamp-coordinate-x'][$i]/100.00)*1.0;
        $json_object->scenario->reactor->lamptypes->lamp_center_nodes[$i]->y= floatval($scenario['lamp-coordinate-y'][$i]/100.00)*1.0;
        $json_object->scenario->reactor->lamptypes->lamp_center_nodes[$i]->z= floatval(0.0);
        $json_object->scenario->reactor->lamptypes->lamp_center_nodes[$i]->power_factor = floatval($scenario['lamp-coordinate-powerfactor'][$i])*1.0;
        $json_object->scenario->reactor->lamptypes->lamp_center_nodes[$i]->bulb_power_factor = floatval($scenario['lamp-coordinate-powerfactor'][$i])*1.0;
        $json_object->scenario->reactor->lamptypes->lamp_center_nodes[$i]->value = floatval(0.0)*1.0;
        $json_object->scenario->reactor->lamptypes->lamp_center_nodes[$i]->active = intval(0);

		/*\"calculation\":{
			\"type\":\"frd\",
			\"output_units\":\"wm2\",
			\"point_count_value\":0,
			\"output_radial_resolution\":0.0,
			\"longitudinal_resolution\":0.0,
			\"internal_radial_resolution\":0.0001*/
    }
	
	// Medium Pressure Data
	
	for ($i=1; $i <= 20; $i++){
	
		$ept_label = "ept-".$i;
		$rle_label = "rle-".$i;
		$lst_label = "lst-".$i;
		$gef_label = "gef-".$i;
		/*typedef struct UVNode
		typedef struct UVBand
		{

			double EPT;
			double RLE;
			double LST;
			double GEF;
			
		} UVBand;
		*/
		
		$json_object->scenario->reactor->lamptypes->band_data[$i-1]->EPT = floatval($scenario[$ept_label]);
		$json_object->scenario->reactor->lamptypes->band_data[$i-1]->RLE = floatval($scenario[$rle_label]);
		$json_object->scenario->reactor->lamptypes->band_data[$i-1]->LST = floatval($scenario[$lst_label]);
		$json_object->scenario->reactor->lamptypes->band_data[$i-1]->GEF = floatval($scenario[$gef_label]);
	
	}

    $json_object->scenario->calculation->type = $scenario['calculation-type'];
    $json_object->scenario->calculation->output_radial_resolution = floatval($scenario['output-resolution']/100.00);
    $json_object->scenario->calculation->output_units = $scenario['output-units'];
    $json_object->scenario->calculation->point_count_value = intval(1001);
	
	if(floatval($scenario['output-resolution']/100.00) > 0.0009){
		$json_object->scenario->calculation->internal_radial_resolution = floatval(0.001);
	}
	else{
		$json_object->scenario->calculation->internal_radial_resolution = floatval(0.0001);
	}
	
    $json_object->scenario->calculation->longitudinal_resolution = floatval(0.0001);
    
    $json_object->scenario->name = $scenario['scenario-name'];
	$json_object->scenario->reactor->name = $scenario['scenario-name'];

/*			\"diameter\":0.3,
			\"length\":2.4,
			\"width\":0.0,
			\"height\":0.0,
			\"refraction\":\"on\",
			\"shadowing\":\"off\",
			\"flow_axis\":\"none\",
			\"trans_h_axis\":\"none\",
			\"trans_v_axis\":\"none\",
			\"shape\":\"circular\",*/

    $json_object->scenario->reactor->shape = $scenario['reactor-shape'];
    $json_object->scenario->reactor->length = floatval($scenario['reactor-length']/100.00);
    $json_object->scenario->reactor->diameter = floatval($scenario['reactor-inner-diameter']/100.00);
    $json_object->scenario->reactor->width = floatval($scenario['reactor-inner-width']/100.00);
    $json_object->scenario->reactor->height = floatval($scenario['reactor-inner-height']/100.00);

    /*$json_object->scenario->reactor->refraction;
    $json_object->scenario->reactor->shadowing;
    $json_object->scenario->reactor->flow_axis;
    $json_object->scenario->reactor->trans_h_axis;
    $json_object->scenario->reactor->trans_v_axis;*/
 
			//"refraction":"",
			//"shadowing":"",
			//"flow_axis":"",
			//"trans_h_axis":"",
			//"trans_v_axis":"",

    $json_object->scenario->reactor->medium->type = $scenario['medium-type'];
    $json_object->scenario->reactor->medium->ri = floatval($scenario['medium-ri']);
    $json_object->scenario->reactor->medium->transmittance = floatval($scenario['medium-transmittance']);
    $json_object->scenario->reactor->medium->flow_units = stripslashes($scenario['medium-flow-rate-units']);
    $json_object->scenario->reactor->medium->flow_units = preg_replace("/[^0-9a-zA-Z -]/", "", $json_object->scenario->reactor->medium->flow_units);
    $json_object->scenario->reactor->medium->flow_rate = floatval($scenario['medium-flow-rate']);
    $json_object->scenario->reactor->medium->transmittance_min = floatval($scenario['medium-transmittance-min']);
    $json_object->scenario->reactor->medium->transmittance_max = floatval($scenario['medium-transmittance-maximum']);
    $json_object->scenario->reactor->medium->transmittance_step_value = floatval($scenario['medium-trans-increment-step']);
    
    return $json_object;
    
    
}   
	
$user = OCP\USER::getUser();

//$source = isset( $_REQUEST['source'] ) ? trim($_REQUEST['source'], '/\\') : '';

//$target = $dir.'/'.$filename;

$user_data_directory = OC_Config::getValue( "datadirectory", OC::$SERVERROOT."/data" )."/".$user."/files";

//$contents = "";
$coord_count = 0;
$server = array();

foreach($_POST as $key=>$value)
{

        $scenario[$key] = $value;

        if($key=="lamp-coordinate-powerfactor"){
            $coord_count = count($value);    
        }
  
}

$uid = uniqid();


/* Check the current subscription */


	$sql = "SELECT id, secret_key, publishable_key FROM oc_subscription_payment_connection WHERE id = 1";
	$args = array();

	$query = \OCP\DB::prepare($sql);

	$result = $query->execute($args);

	while($row = $result->fetchRow()) {
					
		Stripe::setApiKey($row['secret_key']);
			
	}


function findStripeCustomer($starting_after,$email){
	
	$customers = Stripe_customer::all(array(starting_after=>$starting_after,limit=>25));
	
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

$customer = findStripeCustomer(null,$user);

if($customer == null){
	
	OCP\JSON::error(array('error'=>'Account does not exist'));
	exit;
	
}

$active = false;
$ppu = false;


try{
								
	$subscriptions = $customer->subscriptions->all();

	
	foreach($subscriptions->data as $subscription){
				
		if($subscription['status'] == "active" || $subscription['status'] == "trialing" ){
			
			$active = true;
			
			
			if($subscription->plan['metadata']['ppu'] == "yes"){
				$ppu = true;
				$customer->subscriptions->retrieve($subscription->id)->cancel();	
			}
			
		}
		
						

	}
					
	
	
} catch (Exception $e){
	
	OCP\JSON::error(array('error'=>$e->getMessage()));
	exit;
	
}

if($active === false){
	
	OCP\JSON::error(array('error'=>'No active subscription.'));
	exit;
}		

try{
	$scenario['coord_count'] = $coord_count;
	$scenario_name = $scenario['scenario-name'];
	$scenario_name = preg_replace("/[^a-zA-Z0-9_\-,;:]/", "", $scenario_name);
	$scenario['output_file'] = $user_data_directory."/UVC-Scenarios/".$scenario_name."-".$uid.".xlsx";

	$cur_directory = getcwd();

	//chdir ($user_data_directory."/UVC-Scenarios");

	/*
	exec('git config --global user.name "Kevin Wright"');
	exec('git config --global user.email kevin.wright@tekhus.com');
	exec('git checkout master');
	*/

	$dbname = $user_data_directory."/UVC-Scenarios/uvc-in/".$uid.".uvc";

	$scenario_fname = $user_data_directory."/UVC-Scenarios/json-in/".$uid.".txt";

	$log_file = $user_data_directory."/UVC-Scenarios/log.txt";

	//$scenario_json = JSON.stringify($scenario); 

	$json_string = get_default_json_string();

	$json_object = set_json_object($json_string, $scenario);

	//$json_object->git_init_output=$git_init_output;
	//$json_object->git_checkout_output=$git_checkout_output." | "."git checkout -b ".$uid;

	$scenario_json = json_encode($json_object)."\n";
	$git_init_output = "";

	if (!file_exists($user_data_directory.'/UVC-Scenarios')) {
		mkdir($user_data_directory.'/UVC-Scenarios', 0755, true);
		chdir ($user_data_directory."/UVC-Scenarios");
		//$git_init_output = shell_exec('git init');
	}
	else{
		chdir ($user_data_directory."/UVC-Scenarios");
		//$git_init_output = shell_exec('git init');
	}

	//$checkout_err =exec('git commit -a -m \"Committing any uncommited changes\"');
	//$checkout_err =exec('git checkout master');
	//$checkout_err =exec('git checkout -b '.$uid.'  2>&1', $git_checkout_output = array());

	if (!file_exists($user_data_directory.'/UVC-Scenarios/uvc-in')) {
		mkdir($user_data_directory.'/UVC-Scenarios/uvc-in', 0755, true);
	}

	if (!file_exists($user_data_directory.'/UVC-Scenarios/json-in')) {
		mkdir($user_data_directory.'/UVC-Scenarios/json-in', 0755, true);
	}

	file_put_contents($scenario_fname, $scenario_json);
} catch (Exception $e){
	
	OCP\JSON::error(array('error'=>$e->getMessage()));
	exit;
	
}


try{

$uvc_output_cmd = 'export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/var/uvcalc/uvconline:/usr/local/lib && /var/uvcalc/uvconline/uvcalc '.$scenario_fname;

exec($uvc_output_cmd . " > /dev/null &");

$uvc_output = shell_exec($uvc_output_cmd );

} catch (Exception $e){
	
	OCP\JSON::error(array('error'=>$e->getMessage()));
	exit;
	
}

try{

$timestamp = new DateTime();

$from = "noreply@online.uvcalc.com";
$subject = "UVCalc Online Data";

//while($row = $result->fetchRow()) {
	
	require_once('../../uvcalc_online/lib/PHPMailer/class.phpmailer.php');
	
	$mail = new PHPMailer(); // defaults to using php "mail()"
	
	$body = "<p>Your UVCalc Online data is now available. Please find it in the attached spreadsheet.</p><p>You can also find it stored online at UVCalc Online. When logged into the system, select \"Files\" from the Apps menu in the upper left corner of the screen.</p>The direct link to your UVCalc data directory can also be found by <a href=\"".$_SERVER['SERVER_NAME']."/index.php/apps/files?dir=%2FUVC-Scenarios\">CLICKING HERE</a>.<br>";

	$mail->AddReplyTo("noreply@online.uvcalc.com","UVCalc Online");

	$mail->SetFrom('noreply@online.uvcalc.com', 'UVCalc Online');

	$mail->AddReplyTo("noreply@online.uvcalc.com","UVCalc Online");

	$address = $uid;
	
	$mail->AddAddress($user, $user);

	$mail->Subject    = $subject;

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	
	if(floatval($scenario['output-resolution']/100.00) > 0.0009){
	
		$mail->AddAttachment($scenario['output_file']);      // attachment
	
	}
	else{
	
		
		
		$body = "<p>Your UVCalc Online data is now available. Please find it when logged into the system. Select \"Files\" from the Apps menu in the upper left corner of the screen. It will be located under the UVC-Scenarios sub-directory, and is called ".$uid."-".$scenario_name.".xlsx</p>The direct link to your UVCalc data directory can also be found by <a href=\"".$_SERVER['SERVER_NAME']."/index.php/apps/files/UVC-Scenarios?dir=%2FUVC-Scenarios\">CLICKING HERE</a>.<br>";
		
	}
	
	$mail->MsgHTML($body);
	
	//$mail->Send();


} catch (Exception $e){
	
	OCP\JSON::error(array('error'=>$e->getMessage()));
	exit;
	
}

try{

OCP\JSON::success(array('message'=>($scenario_name."-".$uid.".xlsx")));

} catch (Exception $e){
	
	OCP\JSON::error(array('error'=>$e->getMessage()));
	exit;
	
}

try{

OCP\Util::emitHook('Subscription_Hooks', 'clickEvent', "uvcalc_online");

} catch (Exception $e){
	
	OCP\JSON::error(array('error'=>$e->getMessage()));
	exit;
	
}

exit;


?>
