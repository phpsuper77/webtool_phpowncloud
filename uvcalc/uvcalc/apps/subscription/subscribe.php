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

require_once(dirname(__FILE__) . '/appinfo/config.php');

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
<div style="width: 25%; display: table-cell;"></div>
<div style="text-align:center;width: 50%; border: solid #990066 1px; border-radius: 25px; display:table-cell;">

<img width="50%" src="/core/img/BPIlogo72.png">

<table width="100%">

	<tr>
		<th colspan="2" style="vertical-align: middle; background-color:#990066;">
			<h2 style="margin-top:20px;color:#fff">Subscription Levels</h2>
		</th>
	</tr>

<?php

$xml = simplexml_load_file('/etc/subscription/subscription.xml');
$types = $xml->types;

foreach($types as $key=>$value){
    foreach($value as $type){

		printf("<tr>");
		printf("<td style=\"border-bottom:#990066 solid 1px\">%s</td>",$type->description);
		printf("<td style=\"border-bottom:#990066 solid 1px;width:20%%;background-color: #A0CFEC;border-top-left-radius:25px;border-bottom-left-radius:25px;text-align:center\">");
		$price = ($type->price/100.00);
		printf("$%s",$price );
		printf("<form action=\"/index.php/apps/subscription/charge.php\" method=\"post\">");
?>

                <br>Coupon Code (if any)<br><input type="text" id="uv-couponcode" name="uv-couponcode"></input>


<?php

		printf("<script src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"");
		printf(" data-key=\"%s\"",$stripe['publishable_key']);
		printf(" data-amount=\"%d\" data-description=\"%s\"></script>",$type->price,$type->description);
		printf("<input type=\"hidden\" id=\"data-amount\" name=\"data-amount\" value=\"%d\">",$type->price);
		printf("<input type=\"hidden\" id=\"subscription-id\" name=\"subscription-id\" value=\"%d\">",$type->id);
		printf("<input type=\"hidden\" id=\"data-description\" name=\"data-description\" value=\"%s\">",$type->description);
		printf("</form>");
		printf("</td>");
		printf("</tr>");					
											
	}
				
}
				
?>				

</table>
</div>
<div style="width: 25%; display: table-cell;"></div>
</div>
</div>

</body>
</html>
