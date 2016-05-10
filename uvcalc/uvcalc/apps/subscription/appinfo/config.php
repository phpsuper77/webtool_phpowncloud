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

require_once('lib/Stripe.php');

// TODO: get rid of hard coded path

if (file_exists('/etc/subscription/subscription.xml')) {
    $xml = simplexml_load_file('/etc/subscription/subscription.xml');

    $stripe = array(
        "secret_key"      => $xml->secret,
        "publishable_key" => $xml->publishable
    );
 
    Stripe::setApiKey($stripe['secret_key']);
} else {
    exit('Failed to open subscription.xml.');
}



?>
