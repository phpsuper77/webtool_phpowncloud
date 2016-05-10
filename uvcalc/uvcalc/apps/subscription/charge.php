<?php


//\OCP\User::checkLoggedIn();
//\OCP\App::checkAppEnabled('subscription');

OCP\Util::addScript('subscription', 'subscription');
OCP\Util::addStyle('subscription', 'subscription');

$tpl = new OCP\Template("subscription", "charge", "user");
$tpl->printPage();


exit;


?>

