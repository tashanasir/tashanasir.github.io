<?php
require 'connect.inc.php';
require 'config.inc.php';
?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Do-Gooder</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome">Welcome to Do-Gooder, <strong>Tasha Nasir</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>
							<ul class="dropdown-menu">
								<li><a tabindex="-1" href="reviews.php"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
								<li><a tabindex="-1" href="settings.php"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="logout.php"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>
						</li>
						<li><a href="login-register.php">LOGIN/REGISTER</a></li>
					</ul>
				</div>
			</div>
			<!-- /Top Bar -->
			<div id="header" class="sticky header-md clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left scrollTo" href="#top">
							<img src="assets/images/1.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li class="active"><!-- HOME -->
										<a href="index.php">
											HOME
										</a>
									</li>
									<li><!-- EVENTS -->
										<a href="#events">
											EVENTS
										</a>
									</li>
									<li><!-- BLOG -->
										<a class="external" href="blog.php">
											BLOG
										</a>
									</li>
									<li><!-- CONTACT -->
										<a href="contact.php">
											CONTACT
										</a>
									</li>
									<li><!-- FAQ -->
										<a href="faq.php">
											FAQ
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>



			<!-- SLIDER -->
			<section id="slider" class="fullheight" style="background-image:url('assets/images/demo/video/back.jpg');">
				<div class="overlay dark-3"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container">

							<div class="row">
								<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

									<h1 class="bold font-raleway wow fadeInUp" data-wow-delay="0.4s">DO-GOODER EVENT</h1>
									<h6>STARTS IN</h6>

									<!-- Circle Countdown -->
									<div class="countdown circle" data-from="January 4, 2019 12:00:00"><!-- Example Date From: December 31, 2018 15:03:26 --></div>

									<a class="btn btn-default" href="events.php"><i class="fa fa-angle-down"></i> VIEW EVENTS &nbsp;<i class="fa fa-angle-down"></i></a>
								</div>
							</div>

						</div>
					</div>
				</div>

			</section>
			<!-- /SLIDER -->



			<!-- Do Not Miss -->
			<section id="donotmiss">
				<div class="container">

					<div class="row">

						<div class="col-md-3">

							<div class="box-static box-border-top">
								<div class="box-title">
									<h4>Do Not Miss</h4>
								</div>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus.</p>
								<p><small>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis.</small></p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1" style="background-color:#a0ce4e;">
										<div class="box-icon-title">
											<i class="fa fa-refresh fa-spin"></i>
											<h2>Unique Experience</h2>
										</div>
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
									</div>
								</div>

								<div class="back">
									<div class="box2" style="background-color:#a0ce4e;">
										<h4>Unique Experience</h4>
										<hr />
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1" style="background-color:#cb9536;">
										<div class="box-icon-title">
											<i class="fa fa-map-marker"></i>
											<h2>Great Location</h2>
										</div>
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
									</div>
								</div>

								<div class="back">
									<div class="box2" style="background-color:#cb9536;">
										<h4>Great Location</h4>
										<hr />
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1" style="background-color:#73b9dc;">
										<div class="box-icon-title">
											<i class="fa fa-beer"></i>
											<h2>Free Beers</h2>
										</div>
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
									</div>
								</div>

								<div class="back">
									<div class="box2" style="background-color:#73b9dc;">
										<h4>Free Beers</h4>
										<hr />
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</section>
			<!-- /Do Not Miss -->




		


			<!-- Upcoming Events -->
			<section id="events">
				<div class="container">

					<h3>UPCOMING EVENTS /<span class="size-16 weight-400">see you soon!</span></h3>

					<div class="row">

						<div class="col-sm-4">

							<h4><i class="glyphicon glyphicon-option-vertical"></i> Ordered By Date</h4>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">02</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="joinform.php">Buy Ticket</a>
									</div>
								</div>
							</div>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">03</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">04</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

						</div>

						<div class="col-sm-4">

							<h4><i class="glyphicon glyphicon-option-vertical"></i> Ordered By Title</h4>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">08</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">09</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">10</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

						</div>

						<div class="col-sm-4">

							<h4><i class="glyphicon glyphicon-option-vertical"></i> Order Randomly</h4>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">14</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">15</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

							<div class="event-item">
								<div class="event-date-wrapper">
									<span class="event-date-day">16</span>
									<span class="event-date-month">April</span>
								</div>
								<div class="event-content-wrapper">
									<div class="event-content-inner-wrapper">
										<h3 class="event-title"><a href="#">New York</a></h3>
										<div class="event-location">Colonial Life Arena w/ Aloe Blacc </div>
									</div>
									<div class="event-status-wrapper">
										<a href="#">Buy Ticket</a>
									</div>
								</div>
							</div>

						</div>

					</div>


				</div>
			</section>
			<!-- /Upcoming Events -->

				<!-- Rate -->
			<section id="news">
				<div class="row countTo-md text-center">
					<div class="col-xs-6 col-sm-3">
						<i class="glyphicon glyphicon-user"></i>
						<span class="countTo" data-speed="3000" style="color:#59BA41">1303</span>
						<h5>HAPPY CLIENTS</h5>
					</div>
					<div class="col-xs-6 col-sm-3">
						<i class="glyphicon glyphicon-fire"></i>
						<span class="countTo" data-speed="3000" style="color:#774F38">56000</span>
						<h5>EVENTS</h5>
					</div>
					<div class="col-xs-6 col-sm-3">
						<i class="icon-twitter"></i>
						<span class="countTo" data-speed="3000" style="color:#C02942">4897</span>
						<h5>TWITTER</h5>
					</div>
					<div class="col-xs-6 col-sm-3">
						<i class="icon-facebook"></i>
						<span class="countTo" data-speed="3000" style="color:#1693A5">9877</span>
						<h5>FACEBOOK</h5>
					</div>
				</div>
			</section>
			<!-- /Rate -->



			<!-- -->
			<section class="nopadding">
				<div class="container">
				
					<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only
						
						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
					-->
					<div class="text-center margin-top-30 margin-bottom-30">
						<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": false, "autoPlay": 3000,"navigation": false,"pagination": false}'>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/3.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/4.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/5.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/6.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/7.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/8.jpg" alt="">
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- / -->




			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2015</small>
								</li>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->


		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>

		<!-- PAGELEVEL SCRIPTS -->
		<script type="text/javascript" src="assets/js/contact.js"></script>

		<!-- 
			GMAP.JS 
			http://hpneo.github.io/gmaps/
		-->
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="assets/plugins/gmaps.js"></script>
		<script type="text/javascript">

			jQuery(document).ready(function(){

				/**
					@BASIC GOOGLE MAP
				**/
				var map2 = new GMaps({
					div: '#map2',
					lat: -12.043333,
					lng: -77.028333,
					scrollwheel: false
				});

				var marker = map2.addMarker({
					lat: -12.043333,
					lng: -77.028333,
					title: 'Company, Inc.'
				});

			});

		</script>
	</body>
</html>
