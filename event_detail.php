<?php
require 'connect.inc.php';
require 'core.inc.php';

if(!loggedIn()){ 
// for volunteers
echo 'OK';

} else {

if(isset($_GET['evname'])){
    $_SESSION['evname'] = $_GET['evname'];
    unset($_GET['evname']);
}
//fetch event details
$queryP1 = "SELECT * FROM event_details WHERE eventName='$_SESSION[evname]'";
$query_runP1 = mysqli_query($mysqlconn,$queryP1);
        if (true==$query_runP1){
            $query_num_rows = mysqli_num_rows($query_runP1);
            if ($query_num_rows==0){ echo 'Invalid ID'; }
            else {
            $eventsD = mysqli_fetch_assoc($query_runP1);
            echo 'OK';
            }
        } else {
        printf("error: %s\n", mysqli_error($mysqlconn));
        }  
$queryP2 = "SELECT orgName FROM users WHERE id ='$eventsD[id]'";
$query_runP2 = mysqli_query($mysqlconn,$queryP2);
	if (true==$query_runP2){
            $query_num_rows = mysqli_num_rows($query_runP2);
            if ($query_num_rows==0){ echo 'Invalid ID'; }
            else {
            $usersD = mysqli_fetch_assoc($query_runP2);
            echo 'OK';
            }
    } else {
        printf("error: %s\n", mysqli_error($mysqlconn));
    }  
}
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
		<a href="index.php" class="navbar-brand">DO-<span class="lighter">GOODER</span></a>
	</div>
	<!-- Start Navigation -->
	<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	<ul class="nav navbar-nav">
		<li>
		<a href="index.php">Home</a>
		</li>
		<li>
		<a href="<?php if(loggedIn()) echo "profile.php";
						else echo "login_register.php"?>">
		<?php if(!loggedIn()) {?>
		Login/Register
		<?php } else { echo 'Hello ' . $_SESSION['orgName'] . '!'; } ?>
		</a>
		</li>
	</ul>
	</nav>
</div>
</header>

<!-- Intro
	================================================== -->
<section id="memberArea" class="section active-section">
<div class="wrapsection">
	<div class="container cy-bg-white">
		<div class="row">
			
			<?php if(loggedIn()) { ?>
			<div class="col-md-12 col-xs-12 cy-m-top-20">
				<div class="col-md-12">
					<div class="col-md-8">
						<h3><i class="fa fa-file-text-o text-danger"></i><?php echo $eventsD['eventName'] . " (" . $usersD['orgName'] . ")"; ?></h3>
					</div>
					
				</div>
				<hr class="cy-hr"/>
			</div>
			<div class="col-md-12 col-xs-12 cy-m-top-20">
				<div class="col-md-12">
					<div class="col-md-6">
						<p><?php echo $eventsD['description'] ?></p>
					</div>
					<div class="col-md-6">
						<p><i class="fa fa-map-marker"></i><?php echo $eventsD['address'] . $eventsD['city'] . $eventsD['state'] ?></p>
						<a href="<?php echo "http://" . $eventsD['registURL'] ?>" class="btn cy-btn-success" target="_blank"><i class="fa fa-send"></i> Click to register </a>
					</div>
				</div>
			</div>
			<?php } else {

				//fetch event details
$queryP3 = "SELECT * FROM event_details";
$query_runP3 = mysqli_query($mysqlconn,$queryP3);
        if (true==$query_runP3){
            $query_num_rows = mysqli_num_rows($query_runP3);
            if ($query_num_rows==0){ echo 'Invalid ID'; }
            else {
            //$eventsD2 = mysqli_fetch_assoc($query_runP3);
            }
        } else {
        printf("error: %s\n", mysqli_error($mysqlconn));
        }  
				if($query_runP3==true){
					while($eventsD2 = mysqli_fetch_assoc($query_runP3)){

						//userd
						$queryP4 = "SELECT orgName FROM users WHERE id ='$eventsD2[id]'";
						$query_runP4 = mysqli_query($mysqlconn,$queryP4);
						if (true==$query_runP4){
						$query_num_rows = mysqli_num_rows($query_runP4);
						if ($query_num_rows==0){ echo 'Invalid ID'; }
						else {
						$usersD2 = mysqli_fetch_assoc($query_runP4);
						}
    } else {
        printf("error: %s\n", mysqli_error($mysqlconn));
    }  
			?>
			<div class="col-md-12 col-xs-12 cy-m-top-20">
				<div class="col-md-12">
					<div class="col-md-8">
						<h3><i class="fa fa-file-text-o text-danger"></i><?php echo $eventsD2['eventName'] . " (" . $usersD2['orgName'] . ")"; ?></h3>
					</div>
					
				</div>
				<hr class="cy-hr"/>
			</div>
			<div class="col-md-12 col-xs-12 cy-m-top-20">
				<div class="col-md-12">
					<div class="col-md-6">
						<p><?php echo $eventsD2['description'] ?></p>
					</div>
					<div class="col-md-6">
						<p><i class="fa fa-map-marker"></i><?php echo $eventsD2['address'] . $eventsD2['city'] . $eventsD2['state'] ?></p>
						<a href="<?php echo "http://" . $eventsD2['registURL'] ?>" class="btn cy-btn-success" target="_blank"><i class="fa fa-send"></i> Click to register </a>
					</div>
				</div>
			</div>
			<?php 
					}
			}
		}

			?>
		</div>
	</div>
</div>
</section>

<!-- Credits 
=============================================== -->
<section id="credits" class="text-center cy-footer">
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