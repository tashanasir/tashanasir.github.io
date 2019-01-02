<?php
require 'core.inc.php';
require 'connect.inc.php';

$eventN = $_GET['evname'];
$query = "DELETE FROM event_details WHERE eventName = '$eventN'";
        
        $query_run = mysqli_query($mysqlconn,$query);
//session_destroy();
if($query_run==true) { header('Location: ' . $http_referer); }
?>