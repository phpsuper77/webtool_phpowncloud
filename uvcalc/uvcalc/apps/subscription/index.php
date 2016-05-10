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

// Look up other security checks in the docs!
\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('subscription');

OCP\Util::addScript('subscription', 'subscription');
OCP\Util::addStyle('subscription', 'subscription');

$tpl = new OCP\Template("subscription", "main", "user");
$tpl->printPage();

?>
