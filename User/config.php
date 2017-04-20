<?php
$mysql_hostname = "localhost"; 
$mysql_user = "root"; 
$mysql_password = ""; 
$database = "learning";

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $database) or die("Oops something went wrong!"); 

?>