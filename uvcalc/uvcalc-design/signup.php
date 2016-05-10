<?php

$yearly = 1800;
$monthly = 180;
$multiple_lamp = 80;
$single_lamp = 25;

switch($_GET[plan]) {

case "ppu":
//echo "$25 for single lamp or $80 for multiple lamp";
break;

case "starter":
//echo "$60 per month or $600 per year";
$yearly = 600;
$monthly = 60;
break;

case "premium":
//echo "$180 per month or $1800 per year";
$yearly = 1800;
$monthly = 180;
break;

case "enterprise":
//echo "This should be a contact form.  Probably we should use a separate page that takes explains and requests further information";
break;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Bootstack - Bootstrap 3 Landing Page Theme">
		<meta name="keywords" content="">
		<meta name="author" content="Daniely Wright">
		<link href="assets/img/favicon.png" rel="shortcut icon" >
		<title>UVCalc</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Plugins -->
		<link href="assets/css/social-icons.css" rel="stylesheet">
		<link href="assets/css/icomoon.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="assets/css/style.css" rel="stylesheet">
		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="assets/js/modernizr.custom.js"></script>
	</head>

	<body data-spy="scroll" data-offset="0" data-target="#navigation">

		<!-- Fixed navbar -->
		<nav id="navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><span class="icon-stack"></span> <b>UVCalc</b></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" id="bs-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home" class="smoothScroll">Home</a></li>
						<li><a href="#features" class="smoothScroll">Features</a></li>
						<li><a href="#support" class="smoothScroll">Support</a></li>
						<li><a href="#pricing" class="smoothScroll">Pricing</a></li>
						<li><a href="#contact" class="smoothScroll">Contact</a></li>
					</ul>

					<!-- Sign In / Sign Up -->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#signin" data-toggle="modal" data-target=".bs-modal-sm"><span class="icon-lock"></span> Sign In</a></li>
						<div class="navbar-form pull-left">
							<a href="#pricing" type="button" class="btn btn-sm btn-theme" data-toggle="modal" data-target=".bs-modal-sm">Free Trial</a>
						</div>
					</ul>
				</div><!--/nav-collapse -->
			</div><!-- /container -->
		</nav><!-- /fixed-navbar -->
		
		<!-- Sign In / Sign Up Modal -->
		<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<br>
					<div class="bs-example bs-example-tabs">
						<ul id="myTab" class="nav nav-tabs nav-justified">
							<li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
							<li class=""><a href="#signup" data-toggle="tab">Register</a></li>
						</ul>
					</div>
					<div class="modal-body">
						<div id="myTabContent" class="tab-content">
							<!-- Sign In Form -->
							<div class="tab-pane fade active in" id="signin">
								<form class="form-horizontal">
									<fieldset>
										<!-- Text input-->
										<div class="control-group">
											<label class="control-label" for="Email">Email:</label>
											<div class="controls">
												<input id="Email" name="Email" class="form-control input-large" type="text" placeholder="Your email address" required>
											</div>
										</div>

										<!-- Password input-->
										<div class="control-group">
											<label class="control-label" for="passwordinput">Password:</label>
											<div class="controls">
												<input required id="passwordinput" name="passwordinput" class="form-control input-medium" type="password" placeholder="********">
											</div>
										</div>

										<!-- Multiple Checkboxes (inline) -->
										<div class="control-group">
											<label class="control-label" for="rememberme"></label>
											<div class="controls">
												<label class="checkbox-inline" for="rememberme-0">
													<input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
													Remember me
												</label>
											</div>
										</div>

										<!-- Button -->
										<div class="control-group">
											<label class="control-label" for="signin"></label>
											<div class="controls">
												<button id="signin" name="signin" class="btn btn-theme btn-block">Sign In</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div><!-- /signin -->

							<!-- Sign Up Form -->
							<div class="tab-pane fade" id="signup">
								<form class="form-horizontal">
									<fieldset>
										<!-- Text input-->
										<div class="control-group">
											<label class="control-label" for="Email">Email:</label>
											<div class="controls">
												<input id="Email" name="Email" class="form-control input-large" type="text" placeholder="Your email address" required>
											</div>
										</div>

										<!-- Password input-->
										<div class="control-group">
											<label class="control-label" for="password">Password:</label>
											<div class="controls">
												<input id="password" name="password" class="form-control input-large" type="password" placeholder="********" required>
												<em>1-8 Characters</em>
											</div>
										</div>

										<!-- Text input-->
										<div class="control-group">
											<label class="control-label" for="reenterpassword">Re-Enter Password:</label>
											<div class="controls">
												<input id="reenterpassword" class="form-control input-large" name="reenterpassword" type="password" placeholder="********" required>
											</div>
										</div>

										<!-- Multiple Radios (inline) -->
										<br>
										<div class="control-group">
											<label class="control-label" for="humancheck">Humanity Check:</label>
											<div class="controls">
												<label class="radio-inline" for="humancheck-0">
													<input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
												<label class="radio-inline" for="humancheck-1">
													<input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
											</div>
										</div>

										<!-- Button -->
										<div class="control-group">
											<label class="control-label" for="confirmsignup"></label>
											<div class="controls">
												<button id="confirmsignup" name="confirmsignup" class="btn btn-theme btn-block">Sign Up</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div><!-- /signup -->
						</div><!-- /tab-content -->
					</div><!-- /modal-body -->

					<!--
                    <div class="modal-footer">
						<div class="text-center">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
                    -->
				</div><!-- /modal-content -->
			</div><!-- /modal-dialog -->
		</div><!-- /modal -->

		<!-- Header Wrap -->
		<section id="signup" class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<h2>Online Subscription</h2>
					<hr class="hr-full">
					
					<form class="form-horizontal">
					  <div class="form-group">
					    <div class="col-sm-5 control-label text-uppercase">
					    	<span class="required-mark"></span>
					    	<span class="visible-lg-inline-block">Please</span> choose <b>payment interval</b>
					    </div>
					    <div class="col-sm-7">
					    	<div class="form-group form-group-inline">
					    		<div class="col-xs-6">
					      		<button class="btn btn-theme3 btn-toggle btn-block text-uppercase js-payment-interval-toggle" data-interval-cost="$<?=$monthly;?>">Monthly</button>
					      		<input class="payment-interval-radio" type="radio" name="payment-interval" required data-msg-required="You need to choose the payment interval.">
					    		</div>
					    		<div class="col-xs-6">
					      		<button class="btn btn-theme3 btn-toggle btn-block text-uppercase js-payment-interval-toggle" data-interval-cost="$<?=($yearly/12);?>">Yearly</button>
					      		<input class="payment-interval-radio" type="radio" name="payment-interval">
					    		</div>
					    		<div class="col-xs-12">
						    		<div id="payment-interval-info" class="payment-interval-info">
						    			Subtotal: 
						    			<span id="payment-interval-cost" class="payment-interval-cost"></span>
						    			per month
						    		</div>
					    		</div>

					    		<div class="error-placement"></div>
					    	</div>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-email">
					    	<span class="required-mark"></span>
					    	Email
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control" type="email" id="signup-email" name="signup-email" placeholder="your@email.com" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-firstname">
					    	<span class="required-mark"></span>
					    	First Name
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control" type="text" id="signup-firstname" name="signup-firstname" placeholder="John" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-lastname">
					    	<span class="required-mark"></span>
					    	Last Name
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control" type="text" id="signup-lastname" name="signup-lastname" placeholder="Smith" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-companyname">
					    	Company Name
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control" type="text" id="signup-companyname" name="signup-companyname" placeholder="Optional">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-address-1">
					    	<span class="required-mark"></span>
					    	Address
					    </label>
					    <div class="col-sm-7">
					    	<div class="form-group form-group-vertical">
						      <input class="form-control" type="text" id="signup-address-1" name="signup-address-1" placeholder="Line 1" required>
						      <input class="form-control" type="text" id="signup-address-2" name="signup-address-2" placeholder="Line 2">
					    	</div>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-location-city">
					    	<span class="required-mark"></span>
					    	Location
					    </label>
					    <div class="col-sm-7">
					    	<div class="form-group form-group-vertical form-group-inline">
					    		<div class="col-xs-6">
					      		<input class="form-control" type="text" id="signup-location-city" name="signup-location-city" placeholder="City" required>
					    		</div>
					    		<div class="col-xs-6">
					      		<input class="form-control" type="text" id="signup-location-region" name="signup-location-region" placeholder="Region" required>
					    		</div>
					    		<div class="col-xs-6">
					      		<input class="form-control" type="text" id="signup-location-country" name="signup-location-country" placeholder="Country" required>
					    		</div>
					    		<div class="col-xs-6">
					      		<input class="form-control" type="text" id="signup-location-postalcode" name="signup-location-postalcode" placeholder="Postal Code" required>
					    		</div>
					    	</div>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-phone">
					    	<span class="required-mark"></span>
					    	Phone Number
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control js-phone-mask" type="text" id="signup-phone" name="signup-phone" placeholder="(___) ___-_____" minlength="15" data-msg-minlength="Please enter the phone number in the correct format." required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-coupon">
					    	Coupon (if any)
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control" type="text" id="signup-coupon" name="signup-coupon" placeholder="Optional">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-password">
					    	<span class="required-mark"></span>
					    	Password
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control" type="password" id="signup-password" name="signup-password" placeholder="At least 8 letters and numbers" minlength="8" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label" for="signup-repassword">
					    	<span class="required-mark"></span>
					    	Re-Enter Password
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control" type="password" id="signup-repassword" name="signup-repassword" placeholder="Repeat your password please" data-rule-equalto="#signup-password" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-5 control-label text-uppercase bold" for="signup-cardnumber">
					    	<span class="required-mark"></span>
					    	Card number
					    </label>
					    <div class="col-sm-7">
					      <input class="form-control js-credit-mask" type="text" id="signup-cardnumber" name="signup-cardnumber" placeholder="1234 5678 7654 3210" data-msg-minlength="Please enter the 16 digits." minlength="19" required>
					    </div>
					  </div>

  					<div class="form-group card-info-group">
	  					<div class="card-info-group__expire">
							    <label class="control-label card-info-group__expire-label" for="signup-expire-month">
						    	<span class="required-mark"></span>
						    	Expire
						    </label>
						    <div class="card-info-group__expire-fields">
			    				<input class="form-control form-control_expire-month js-mm-mask" type="text" id="signup-expire-month" name="signup-expire-month" placeholder="MM" minlength="2" maxlength="2" data-rule-digits="true" required>
			    				<input class="form-control form-control_expire-year js-yyyy-mask" type="text" id="signup-expire-year" name="signup-expire-year" placeholder="YYYY" minlength="4" maxlength="4" data-rule-digits="true" required>
						    </div>
	  					</div>

					    <div class="card-info-group__cvv">
						    <label class="control-label card-info-group__cvv-label" for="signup-expire-cvv">
						    	<span class="required-mark"></span>
						    	CVC/CVV
						    	<span class="info-link" data-toggle="tooltip" data-placement="auto bottom" title="CVC/CVV info...">(?)</span>
						    </label>
						    <div class="card-info-group__cvv-field">
			    				<input class="form-control form-control_cvv js-cvv-mask" type="text" id="signup-expire-cvv" name="signup-expire-cvv" placeholder="123" minlength="3" maxlength="3" data-rule-digits="true" required>
						    </div>
					    </div>
					  </div>


					  <div class="form-group">
					    <div class="col-sm-7 col-sm-offset-5">
					      <button class="btn btn-lg btn-theme btn-block btn-submit text-uppercase">Pay now</button>

								<div class="text-center color-light-gray">
						      <span class="required-mark"></span>
						      Indicates a required field
								</div>
					    </div>
					  </div>
					</form>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="side-widget">
						<h3>Important Information</h3>
						<hr class="hr-full">

						<div class="row">
							<div class="col-sm-6 col-md-12">
								<div class="side-widget-sub">
									<h4 class="side-widget-subtitle">You Will Recieve</h4>
									<ul class="check-list">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Сonsectetuer adipiscing elit</li>
										<li>Sed diam nonummy</li>
										<li>Nibh euismod tincidunt ut laoreet dolore</li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 col-md-12">
								<div class="side-widget-sub">
									<h4 class="side-widget-subtitle">Guarantee of Our Services</h4>
									<img class="img-responsive center-block" src="assets/img/guarantee.png" alt="Guarantee of Our Services">
									<div class="textwrap">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.<br>
										—<br> 
										<i>* Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</i>
									</div>
								</div>
							</div>
						</div>						
					</div>

					<div class="side-widget">
						<!-- empty span markup is required -->
						<span></span>
						<h3>Contact Us</h3>
						<hr class="hr-full">

						Call center: (780) 439-4709<br>
						Email: <a href="mailto:support@boltonuv.com">support@boltonuv.com</a>
					</div>
				</div>
			</div>
		</div>


		</section>



		<!-- Footer Wrap -->
		<section id="contact">
			<div class="footerwrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<h3>Contact Us</h3>
							<br>
							<p>
								<b>Bolton Photosciences Inc.</b><br />
								<span class="icon-location"></span> 628 Cheriton Crescent, Edmonton, AB, Canada <br/>
								<span class="icon-phone"></span> (780) 439-4709 <br/>
								<span class="icon-envelope"></span> <a href="mailto:support@boltonuv.com">support@boltonuv.com</a>
							</p>
						</div>

						<div class="col-lg-4">
							&nbsp;
						</div>

						<div class="col-lg-4">
							<h3>Ultraviolet News</h3>
							<br>
							<p>James operates a general UV Newsletter where he talks about exciting innovations in the UV niche.</p>
							<div class="form-inline">
								<input type="text" class="form-control" placeholder="Your email">
								<button class="btn btn-theme" type="button">Subscribe</button>
							</div>
						</div>
					</div><!-- /row -->
				</div><!-- /container -->
			</div><!-- /footerwrap -->
		</section>


		<!-- Copyright Wrap -->
		<div class="copywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<p>Copyright &copy;<?php date("Y") ?> Bolton Photosciences Inc.. All Rights Reserved.</p>
					</div>
					<div class="col-lg-2">
						<? /*<p><a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">Legal</a></p> */ ?>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /copywrap (copyright) -->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/jquery-2.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.1.3.js"></script>
		<script src="assets/js/detectmobilebrowser.js"></script>
		<script src="assets/js/smoothscroll.js"></script>
		<script src="assets/js/waypoints.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>	