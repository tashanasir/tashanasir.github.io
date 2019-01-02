<?php
require 'connect.inc.php';
require 'core.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Do-Gooder</title>
	
	<!-- Styles -->
	<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
	<link rel='stylesheet' href='assets/css/animate.min.css'>
	<link rel='stylesheet' href="assets/css/font-awesome.min.css"/>
	<link rel='stylesheet' href="assets/css/style.css"/>
	
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
			
	<!-- Favicon -->
	<link rel="shortcut icon" href="#">
</head>
<body>
<!-- Begin Hero Bg -->
<div id="parallax">
</div>
<!-- End Hero Bg
	================================================== -->
<!-- Start Header
	================================================== -->
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
<div class="container">
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<!-- Your Logo -->
		<a href="#hero" class="navbar-brand">DO-<span class="lighter">GOODER</span></a>
	</div>
	<!-- Start Navigation -->
	<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	<ul class="nav navbar-nav">
		<li>
		<a href="#hero">Home</a>
		</li>
		<li>
		<a href="#about">Event</a>
		</li>
		<li>
		<a href="#gallery">Gallery</a>
		</li>
		<!--<li>
		<a href="#slider">Testimonials</a>
		</li>-->
		<li>
		<a href="#faq">FAQ</a>
		</li>
		<li>
		<a href="<?php if(loggedIn()) echo "profile.php";
						else echo "login_register.php"?>">
		<?php if(!loggedIn()) {?>
		Login/Register
		<?php } else { echo 'Hello ' . $_SESSION['orgName'] . '!'; } ?>
		</a>
		<!--<a href="#contactarea">Contact</a> -->
		</li>
		<?php if(loggedIn()) { ?>
		<li>
		<a href="logout.php">Logout</a>
		</li>
		<?php } ?>
	</ul>
	</nav>
</div>
</header>

<!-- Intro
	================================================== -->
<section id="hero" class="section" style="opacity:1!important;">
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="herotext">
				<h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s">DO-<span class="lighter">GOODER</span></h1>
				<p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
					When we give cheerfully and accept gratefully, everyone is blessed.
				</p>
				<b><p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
					DO-is a website that gather all NGOs events informations.
				</p></b>
				<p>
					<a href="event_detail.php" class="btn btn-default btn-lg wow fadeInLeft" role="button"> View Event </a> &nbsp; 
				</p>
			</div>
		</div>
		<div class="col-md-7">
		</div>
	</div>
</div>
</section>
<!-- About
	================================================== -->
<section id="about" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/1.jpg);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Title -->
				<div class="maintitle">
					<h3 class="section-title"><strong>EVENT <span class="lighter">LIST</span></strong> </h3>
					<p class="lead">
						Find cause to help other people. With more volunteers and more volunteer opportunities than any other service.
					</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
					<img src="assets/img/dummy.jpg" alt="">
					<h3>August 7, 2015 <br/>Square Garden</h3>
					<div class="text-left">
						<p>
							I will place all the necessary content for this event here, including where they can register, join, attend &amp; so on.
						</p>
						<p>
							If not enough room, I will link to learn more, a new event page dedicated.
						</p>
						<p>
							Yap. Really looking goody awesome!
						</p>
						<p class="text-center">
							<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
					<span class="glyphicon glyphicon-stats"></span>
					<h3>1.386 Participants</h3>
					<p>
						Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
					</p>
					<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<span class="glyphicon glyphicon-tree-deciduous"></span>
					<h3>195 Concerts</h3>
					<p>
						Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
					</p>
					<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
					<span class="glyphicon glyphicon-heart"></span>
					<h3>268 Sponsors</h3>
					<p>
						Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
					</p>
					<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.4s">
					<span class="glyphicon glyphicon-usd"></span>
					<h3>$5.647 Donated</h3>
					<p>
						Nullam posuere, libero id interdum hendrerit, tortor nisl consectetur elit.
					</p>
					<button type="button" class="btn btn-info btn-md"><a href="#">Learn More</a></button>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Random
	================================================== -->
<section class="parallax section" style="background-image: url(assets/img/3.jpg);">
	<div class="wrapsection">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 sol-sm-12">
				<div class="maintitle">
					<h3 class="section-title justtitle">Participation is everything</h3>
					<p class="lead bottom0 wow bounceInUp">
						VOLUNTEER UNITY is how good people and good causes get connected.
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Gallery
	================================================== -->
<section id="gallery" class="parallax section" style="background-image: url(assets/img/2.jpg);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color:#00c1c1;opacity:0.9;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 sol-sm-12">
				<div class="maintitle">
					<h3 class="section-title">Events Gallery</h3>
					<p class="lead wow flipInX">
						Have a look at your past events gallery, see how much fun we have while helping people all over the world. Join our community today!
					</p>
				</div>
			</div>
			
			<div class="col-md-4">
				<a href="assets/img/vu2.jpg" title="This is the description">
					<img src="assets/img/vu3.jpg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">This is <b>awesome</b></span> 
						<span class="camera"><i class="fa fa-camera"></i></span>
						<div class="clearfix"></div>
					</div>			
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/img/vu3.jpg" title="This is the description">
				<img src="assets/img/vu5.jpg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Do something <b>good</b></span> 
						<span class="camera"><i class="fa fa-link"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/img/vu4.jpg" title="This is the description">
				<img src="assets/img/vu3.jpg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Good <b>hearts</b></span> 
						<span class="camera"><i class="fa fa-heart"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			
			
			
		</div>
	</div>
</div>
</section>
<!-- Text Carousel
	================================================== -->
<section id="slider" class="parallax section" style="background-image: url(assets/img/4.jpg);">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="Carousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<blockquote>
								<p class="lead">
									This website helped me a lot in finding all the NGO activities and do something good. You have not lived today until you have done something for someone who can never repay you.
								</p>
								<small>Mahathir, UiTM Student</small>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p class="lead">
									The registration is simple as ABC. Less hassle. I belive the simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer.
								</p>
								<small>Fatah , Engineer</small>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p class="lead">
									There is no exercise better for the heart than reaching down and lifting people up. This is a great website to gather all good heart people.
								</p>
								<small>Fazura, Organizer</small>
							</blockquote>
						</div>
					</div>
					<a class="left carousel-control" href="#Carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#Carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- FAQ
	================================================== -->
<section id="faq" class="section">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sol-sm-12">
				<div class="maintitle">
					<h3 class="section-title">Conditions of <span class="wow bounceInRight">Participation</span></h3>
					<p class="lead">
						It is a condition of your booking that you are prepared to be flexible in relation to your location and date.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								How old can I be? </a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse">
								<div class="panel-body">
									 21 years and above.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								How can i register? </a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									 Simply click the event you want to join and click the button register. It will bring you to the NGOs website for registration
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
								What is the need to Volunteering? </a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body">
									 Commitment to the values and principles of volunteerism.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
								Are there free drinks and foods? </a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse">
								<div class="panel-body">
									 The food and the drinks will be provide by the NGOs.
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
								Can i choose the date? </a>
								</h4>
							</div>
							<div id="collapseSeven" class="panel-collapse collapse">
								<div class="panel-body">
									 You may find out the details of date that you are available at list of activities.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
								Will i get any certificate </a>
								</h4>
							</div>
							<div id="collapseEight" class="panel-collapse collapse">
								<div class="panel-body">
									 NGOs will provide certification at the end of day.
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Random
	================================================== -->
<section class="whitecolor parallax section" style="background-image: url(assets/img/5.jpg);">
<div class="wrapsection">
	<div class="container">
	<div class="row">
		<div class="col-md-12 sol-sm-12">
			<div class="maintitle">
				<h3 class="section-title justtitle">Volunteering <span class="wow flipInX">&amp; love</span> are the same</h3>
				<p class="lead bottom0">
					 Fusce fermentum lectus id turpis suscipit, ut egestas magna volutpat. Donec a purus tellus. Nunc ut dolor eu est gravida auctor quis vitae.
				</p>
			</div>
		</div>
	</div>
	</div>
</div>
</section>
<!-- Contact
	================================================== -->
<section id="contactarea" class="parallax section" style="background-image: url(assets/img/map.png);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.95;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="maintitle">
					<h3 class="section-title">Get in Touch</h3>
					<p class="lead">
						If you have questions about our events, don't hesitate to send us your message. This is a real working contact form, test it!
					</p>
				</div>
				<form id="contact" name="contact" method="post" class="text-left">
					<fieldset>
						<div class="row">
							<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
								<label for="name">Name<span class="required">*</span></label>
								<input type="text" name="name" id="name" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="email">Email<span class="required">*</span></label>
								<input type="text" name="email" id="email" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone" size="30" value=""/>
							</div>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
							<label for="message">Message<span class="required">*</span></label>
							<textarea name="message" id="message" required></textarea>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
							<input id="submit" type="submit" name="submit" value="Send"/>
						</div>
					</fieldset>
				</form>
				<div id="success">		
					<p class="contactalert">
						Your message was sent succssfully! I will be in touch as soon as I can.
					</p>			
				</div>
				<div id="error">			
					<p class="contactalert">
						 Something went wrong, try refreshing and submitting the form again.
					</p>			
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Credits 
=============================================== -->
<section id="credits" class="text-center">
	<span class="social wow zoomIn">
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-pinterest"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	</span><br/>
	Copyright &copy; <a href="#">DO-GOODER</a> 
	
</section>
<!-- Bootstrap core JavaScript
	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.localScroll.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/common.js"></script>
</body>
</html>