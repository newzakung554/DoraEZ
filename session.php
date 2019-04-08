<?php
	session_start();
	include('conn.php');
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location: login.php');
	}
	
	$sq=mysqli_query($conn,"select * from `usersname` where uid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
		
	if ($srow['access']!=2){
		header('location: login.php');
	}
	
	$user=$srow['username'];
?>