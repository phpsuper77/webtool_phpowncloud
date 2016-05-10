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
 
 \OCP\User::checkLoggedIn();
 
 $user = OCP\USER::getUser();
 
 $timestamp = new DateTime();
 
 $subscription = new User_Subscription($user, "uvcalc_online", $timestamp);
 printf("<p><div class=\"subscription-summary\">");
 if($subscription->get_expired()!=1){
 
	
	printf("<h2>You have an active subscription.</h2>");
	
	if($subscription->get_is_credit_based()==1){
		printf("<h3>You have %d credit(s) left.</h3>",$subscription->get_number_credits());
	}
	
	if($subscription->get_is_time_based()==1){
		$time = strtotime($subscription->get_datetime_expire());
		$time_formatted = date("m/d/y g:i A", $time);
	
		printf("<h3>The expiration date is %s.</h3>",$time_formatted);
	}

	
 }
 else{
	printf("<h2>You do not have an active subscription.</h2>");
	printf("<h3>To purchase one <a href=\"/apps/subscription/subscribe.php\">CLICK HERE</a></h3>");
 }
 	printf("</div></p>");

 

?>
