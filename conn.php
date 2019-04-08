<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","username","password","database_name");
date_default_timezone_set('Asia/Bangkok');
mysqli_set_charset($conn,"utf8");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>