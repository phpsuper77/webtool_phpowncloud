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
 ?>
<?php

OC::$CLASSPATH['Subscription_Hooks'] = 'subscription/hooks/hooks.php';
OC::$CLASSPATH['User_Subscription'] = 'subscription/hooks/hooks.php';

OCP\Util::connectHook('OC_User', 'post_login', 'Subscription_Hooks', 'login');

OCP\Util::connectHook('Subscription_Hooks', 'clickEvent', 'Subscription_Hooks', 'clicked_event');

\OCP\App::addNavigationEntry(array(

    // the string under which your app will be referenced in owncloud
    'id' => 'subscription',

    // sorting weight for the navigation. The higher the number, the higher
    // will it be listed in the navigation
    'order' => 1,

    // the route that will be shown on startup
    'href' => \OCP\Util::linkToRoute('subscription_index'),

    // the icon that will be shown in the navigation
    // this file needs to exist in img/example.png
    'icon' => \OCP\Util::imagePath('subscription', 'nav-icon.png'),

    // the title of your application. This will be used in the
    // navigation or on the settings page of your app
    'name' => 'Subscription'
));

?>
