<?php
require 'connect.inc.php';
require 'core.inc.php';

if(loggedIn()){ 
header('Location: index-onepage-events.php');
}
//checks if login form submitted.
if (isset($_POST['username']) && isset($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($password)){
		$query = "SELECT id, orgName FROM users WHERE username='$username' AND password='$password'";
		$query_run = mysqli_query($mysqlconn,$query);
		if (true==$query_run){
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows==0){ echo 'Invalid username/password'; }
			else {
			$user_id = mysqli_fetch_assoc($query_run);
			$_SESSION['user_id'] = $user_id['id'];
			$_SESSION['orgName'] = $user_id['orgName'];
			unset($_POST['username']);
			unset($_POST['password']);
			header('Location: index-onepage-events.php');
			}
		} else {
		printf("error: %s\n", mysqli_error($mysqlconn));
		}
	}
unset($_POST['username']);
unset($_POST['password']);
}

//checks if register form submitted.
if (isset($_POST['role']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['orgname']) && isset($_POST['usernameR']) && isset($_POST['passwordR'])){
	
	
 	$role      = $_POST['role'];
	$name      = $_POST['name'];
	$email     = $_POST['email'];
	$mobile    = $_POST['mobile'];
	$orgname   = $_POST['orgname'];
	$usernameR = $_POST['usernameR'];
	$passwordR = $_POST['passwordR'];

	if (!empty($role) && !empty($name) && !empty($email) && !empty($mobile) && !empty($orgname) && !empty($usernameR) && !empty($passwordR)){

		$query0 = "SELECT id from users WHERE username = '$usernameR'";
		$query_run0 = mysqli_query($mysqlconn,$query0);
		if ($query_run0==true && mysqli_num_rows($query_run0) == 0){
		
			$query1 = "INSERT INTO users (username, password, orgName) VALUES ('$usernameR', '$passwordR', '$orgname')";
			$query2 = "INSERT INTO user_details (name, email, mobile, role) VALUES ('$name', '$email', '$mobile', '$role')";

			$query_run1 = mysqli_query($mysqlconn,$query1);
			$query_run2 = mysqli_query($mysqlconn,$query2);

				if (true==$query_run1 && true==$query_run2){
					echo 'OK';
				} else {
				printf("error: %s\n", mysqli_error($mysqlconn));
				}
		}
	unset($_POST['username']);
	unset($_POST['password']);
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
	<link rel="stylesheet" href="css/style.css"> <!-- Popup CSS -->
	
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
			<div class="col-md-12">
				<div class="col-md-offset-1 col-md-4 col-xs-12">
					<h4 class="text-primary text-uppercase">Login</h4>
					<form id="formLogin" action="<?php echo $current_file; ?>" method="POST">			
						<label label-for="username">Username</label>
						<input type="text" class="form-control cy-form-control" name="username" required="true"/>
						<br/>
						<label label-for="password">Password</label>
						<input type="password" class="form-control cy-form-control" name="password" required="true"/>
						<br />
						<br />
						<input type="submit" class="btn cy-btn-success" value="Login" /> 
					</form>
				</div>
				<div class="col-md-offset-2 col-md-4 col-xs-12 cy-mobile-m-20">
				<h4 class="text-primary text-uppercase">Register</h4>
					<form id="formSubmit" action="<?php echo $current_file; ?>" method="POST">
						<label label-for="role">
							<p>I want to join as
								<select name="role" class="form-control cy-form-control">
									<option value="">Select..</option>
									<option value="An Organization">An Organization</option>
									<option value="A Volunteer">A Volunteer</option>
								</select>
							</p>
						</label>
					
						<br/>
						<label label-for="name">Name</label>
						<input type="text" class="form-control cy-form-control" name="name" required="true"/>
						<br/>
						<label label-for="email">Email</label>
						<input type="text" class="form-control cy-form-control" name="email" required="true"/>
						<br/>	
						<label label-for="mobile">Mobile</label>
						<input type="text" class="form-control cy-form-control" name="mobile" required="true"/>
						<br/>
						<label label-for="orgname">Organization name</label>
						<input type="text" class="form-control cy-form-control" name="orgname" required="true"/>
						<br/>						
						<label label-for="usernameR">Username</label>
						<input type="text" class="form-control cy-form-control" name="usernameR" required="true"/>
						<br/>
						<label label-for="passwordR">Password</label>
						<input type="password" class="form-control cy-form-control" name="passwordR" required="true"/>
						<br />
						<br />
						<input type="submit" class="btn cy-btn-success" value="Register" /> 
					</form>
			
				</div>
			</div>
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