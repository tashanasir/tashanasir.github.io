<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'qwer1234';
$conn_err = "Couldn't connect";
$dbname = 'ict700';

@$mysqlconn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$dbname);
if(!$mysqlconn){
	die("Database conenction failed");
}// else {
	//@$mysqldb = mysqli_select_db($mysqlconn,$dbname);
	//if(!$mysqldb){
	//die("Database selection failed : " . mysqli_error($mysqlconn));
	//}
//}

?>