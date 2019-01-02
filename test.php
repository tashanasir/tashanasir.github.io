<?php
require 'connect.inc.php';
require 'core.inc.php';

//cheking if login parameters already set.
//if (isset($_POST['username']) && isset($_POST['password'])){
	$username = 'kurokuroo';
	$password = 'abc123';
$text = '<p>asdasda</p>';
echo $asd = strip_tags($text);
	
	/*	$query = "SELECT id FROM users WHERE username='$username' AND password='$password'";
		
		$query_run = mysqli_query($mysqlconn,$query);
		if (true==$query_run){
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows==0){
				echo 'Invalid username/password';
			} else {
			$user_id = mysqli_fetch_assoc($query_run);
			echo $_SESSION['user_id'] = $user_id['id'];
			}
		} else {
		printf("error: %s\n", mysqli_error($mysqlconn));
		} */
//}
?>