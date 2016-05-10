<?php

OCP\JSON::checkLoggedIn();
OCP\JSON::checkAppEnabled('uvcalc_online');
OCP\JSON::callCheck();

$scenario = array();

foreach($_POST as $key=>$value)
{
    if(!is_array($value)){
        $scenario[$key] = $value;
	}
		
}

$msg = "";
$json = json_encode(array());

$user = OCP\USER::getUser();

if(isset($scenario['filename'])){

	//$msg.=$scenario['filename'];
	
	$user_data_directory = OC_Config::getValue( "datadirectory", OC::$SERVERROOT."/data" )."/".$user."/files/UVC-Scenarios/json-in/";

	$json_file = $user_data_directory.$scenario['filename'];
	
	$json = json_decode(file_get_contents($json_file));
	
	$msg = file_get_contents($json_file);

}

OCP\JSON::success(array('message'=>($msg)));

//OCP\JSON::success(array('message'=>("Loaded scenario ".$json_file),'json'=>$json));

exit;

?>