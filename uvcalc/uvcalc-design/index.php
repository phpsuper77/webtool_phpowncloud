<?php
$app_url = "https://local.uvcalcapp.com";
$signup_url = "https://local.uvcalcapp.com/apps/subscription/signup.php";
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
						<li class="dropdown"><a href="<?php echo $app_url?>"  data-target=".bs-modal-sm"><span class="icon-lock"></span> Sign In</a></li>
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
		<section id="home">
			<div class="headerwrap">
				<div class="container">
					<div class="row text-center">
						<div class="col-lg-12">
							<h1><b>UVCalc</b></h1>
							<h3>Increasing UV Reactor Efficiency since 2001.</h3>
							<br>
						</div>

						<div class="col-lg-2 hidden-xs hidden-sm hidden-md">
							<h5>Calculate UV Dose in seconds</h5>
							<p>UVCalc provides a highly accurate estimate of the fluence rate and UV Dose delivered by a UV Reactor.</p>
							<img src="assets/img/arrow-left.png" alt="">
						</div>
						<div class="col-lg-8">
							<img class="img-responsive" src="assets/img/app-bg.png" alt="">
							<!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
							<a href="#features" type="submit" class="btn btn-lg btn-theme smoothScroll">LEARN MORE</a>-->
						</div>
						<div class="col-lg-2 hidden-xs hidden-sm hidden-md">
							<br>
							<img class="pad-top" src="assets/img/arrow-right.png" alt="">
							<h5>UVCalc versus Biodosimetry</h5>
							<p>UVCalc predicts similar results to those from biodosimetry at a tiny fraction of the cost.</p>
						</div>
					</div>
				</div> <!-- /container -->
			</div><!-- /headerwrap -->


			<!-- Intro Wrap -->
			<div class="intro">
				<div class="container">
					<div class="row text-center">
						<h2>Proven Success</h2>
						<hr>
						<br>
						<br>
						<div class="col-lg-3">
							<span class="icon-globe"></span>
							<h3>Global Acceptance</h3>
							<p>UVCalc has been sold on all continents and is used in more than 20 countries.</p>
						</div>
						<div class="col-lg-3">
							<span class="icon-stack"></span>
							<h3>Unique Advantage</h3>
							<p>The only software of its kind that gives major reactor design advantages.</p>
						</div>
						<div class="col-lg-3">
							<span class="icon-stats"></span>
							<h3>Cost Effective</h3>
							<p>Saves thousands of dollars that would have been spent testing.</p>
						</div>
						<div class="col-lg-3">
							<span class="icon-thumbs-up"></span>
							<h3>Easy to Use</h3>
							<p>Takes advanced applied mathematics into a simple to use interface.</p>
						</div>
					</div>
					<br>
				</div> <!-- /container -->
			</div><!-- /introwrap -->
		</section>


		<!-- Features Wrap -->
		<section id="features">
			<div class="featureswrap">
				<div class="container">
					<div class="row">
						<h2 class="text-center">Features</h2>
						<hr>
						<br>
						<br>
						<div class="col-lg-6">
							<img class="img-responsive left" src="assets/img/uvcalc-output.png" alt="">
						</div>

						<div class="col-lg-6">
							<br>
							<!-- Accordion -->
							<div class="accordion ac" id="accordion2">
								<div class="accordion-group active">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
										<span class="icon-cloud"></span> Accessible from Anywhere
										</a>
									</div><!-- /accordion-heading -->
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="accordion-inner">
										<p>UVCalc is now available in a convenient online format, where the user with internet access can access the software from anywhere.  Enter parameters online and then receive the results in a downloaded file within a minute or two.</p>
										</div><!-- /accordion-inner -->
									</div><!-- /collapse -->
								</div><!-- /accordion-group -->
								<br>

								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
										<span class="icon-checkmark"></span> UV Reactor Types
										</a>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="accordion-inner">
										<p>
											UVCalc Online can be used to model UV reactors from a simple 1­lamp
											annular reactor to complex multi­lamp reactors. Both low pressure (monochromatic) and medium
											pressure (polychromatic) UV lamps can be used.
										</p>
										</div><!-- /accordion-inner -->
									</div><!-- /collapse -->
								</div><!-- /accordion-group -->

								<br>
							</div><!-- /accordion -->
						</div>
					</div><!-- /row -->
					<br><br><br>
						<section id="support">&nbsp;</section>
					<div class="row">
						<h2 class="text-center">Expert Support</h2>
						<hr><br><br>
						<div class="col-lg-6">
							<br><br>
							<h4><span class="icon-cogs"></span> 100% Backed by Dr. James R. Bolton</h4>
							<p>
								Since Dr. Bolton published the mathematics of UVCalc® in 2000, he has progressively developed the software so that it can be used for a wide variety of UV reactors. He is available to answer questions and support the software.
							</p>

							<h4><span class="icon-cogs"></span> Consulting beyond UVCalc</h4>
							<p>Dr. Bolton is an internationally recognized consultant in ultraviolet technologies. He is available to assist with any type of UV application.</p>

							<h4><span class="icon-cogs"></span> Contact James</h4>
							<p>
								<span class="icon-phone"></span>+1 (780) 439-4709 <br/>
								<span class="icon-envelope"></span> <a href="mailto:support@boltonuv.com">support@boltonuv.com</a>
							</p>
							<br><br>
						</div>
						

						<div class="col-lg-6">
							<img class="img-responsive right img-polaroid" src="assets/img/portrait.png" alt="">
						</div>
					</div>
					<br>
					<br>
					<br>
				</div><!-- /container -->
			</div><!-- /featureswrap -->
		</section>


		<!-- Divider 1 Section -->
		<div class="divider01">
			<div class="container">
				<div class="row text-center">
					<div id="carousel-example-generic" class="carousel slide">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<h3>"Working with Bootstack was amazing. Their team is incredible."</h3>
								<h4>John Doe, <em>A Company</em></h4>
							</div>
							<div class="item">
								<h3>"Bootstack has helped my team build amazing products. Amazing team."</h3>
								<h4>Jane Doe, <em>A Company</em></h4>
							</div>
						</div><!-- /carousel-inner -->
						<br>
						<br>
						<br>
						<!-- Indicators - Uncomment for indicators to show
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						</ol> -->
					</div><!-- /carousel-example -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /divider01 -->


		<!-- Pricing Section -->
		<section id="pricing">
			<div class="pricingwrap">
				<div class="container text-center">
					<br>
					<h2>Choose Your Plan</h2>
					<hr><br><br>
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="panel panel-custom">
								<div class="panel-heading">
									<h3 class="panel-title">Pay Per Use</h3>
								</div>
								<div class="panel-body">
									<div class="the-price">
										<h2>$25 - $80<span class="subscript"></span></h2>
										<small>No Subscription Needed</small>
									</div>
									<table class="table">
										<tr>
											<td>Single or Multiple Lamps</td>
										</tr>
										<tr>
											<td>Pay as you go</td>
										</tr>
										<tr>
											<td>No Setup Fees</td>
										</tr>										
										<tr>
											<td>Unlimited Lamps</td>
										</tr>
										<tr>
											<td>Ready in Minutes</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
									</table>
								</div>
								<div class="panel-footer">
									<a href="<?php echo $signup_url ?>?plan=ppu" class="btn btn-theme" role="button">Free Trial</a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-3">
							<div class="panel panel-custom">
								<div class="panel-heading">
									<h3 class="panel-title">Bronze</h3>
								</div>
								<div class="panel-body">
									<div class="the-price">
										<h2>$60<span class="subscript">/mo</span></h2>
										<small>7 day FREE Trial</small>
									</div>
									<table class="table">
										<tr>
											<td>Single UV Lamp</td>
										</tr>
										<tr>
											<td>Ideal for small reactors</td>
										</tr>
										<tr>
											<td>No Setup Fees</td>
										</tr>
										<tr>
											<td>Unlimited Calculations</td>
										</tr>
										<tr>
											<td>Cloud storage for Calcs</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
									</table>
								</div>
								<div class="panel-footer">
									<a href="<?php echo $signup_url ?>?plan=starter" class="btn btn-theme" role="button">Free Trial</a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-3">
							<div class="panel panel-custom">
								<div class="panel-heading">
									<h3 class="panel-title">Silver</h3>
								</div>
								<div class="panel-body">
								<div class="the-price">
									<h2>$180<span class="subscript">/mo</span></h2>
									<small>7 day FREE Trial</small>
								</div>
								<table class="table">
									<tr>
										<td>Multiple Lamps</td>
									</tr>
									<tr>
										<td>Reactors up to 75 Lamps</td>
									</tr>
									<tr>
										<td>No Setup Fees</td>
									</tr>
									<tr>
										<td>Unlimited Calculations</td>
									</tr>
									<tr>
										<td>Cloud Storage for Calcs</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
								</table>
								</div>
								<div class="panel-footer">
									<a href="<?php echo $signup_url ?>?plan=premium" class="btn btn-theme" role="button">Free Trial</a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-3">
							<div class="panel panel-custom">
								<div class="panel-heading">
									<h3 class="panel-title">Enterprise</h3>
								</div>
								<div class="panel-body">
								<div class="the-price">
									<h2>$450<span class="subscript">/mo</span></h2>
									<small>Configuration Required</small>
								</div>
								<table class="table">
									<tr>
										<td>CFD Integration</td>
									</tr>
									<tr>
										<td>Unlimited # of Lamps</td>
									</tr>
									<tr>
										<td>Unlimited Calculations</td>
									</tr>
									<tr>
										<td>API Access</td>
									</tr>
									<tr>
										<td>Cloud Storage for Calcs</td>
									</tr>
									<tr>
										<td>Customization Options</td>
									</tr>
									<tr>
										<td>1 Hour consulting each month</td>
									</tr>
								</table>
								</div>
								<div class="panel-footer">
									<a href="<?php echo $signup_url ?>?plan=enterprise" class="btn btn-theme" role="button">Contact Me</a>
								</div>
							</div>
						</div>


							</div>
						</div>
					</div><!-- /row -->
				</div><!-- /container -->
			</div><!-- /pricingwrap -->
		</section>


		<!-- Divider 2 Section -->
		<div class="divider02">
			<div class="container text-center">
				<h3>Start your 7-day free trial today.</h3>
				<a href="#pricing" type="button" class="btn btn-lg btn-theme2">Get Started</a>
			</div>
		</div><!-- /divider02 -->


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
		<script src="assets/js/main.js"></script>
		<script>
			$('.carousel').carousel({
				interval: 3500,
				pause: "none"
			})
		</script>
	</body>
</html>
