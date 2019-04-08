<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['sign_msg'] = "Username should not contain space and special characters!"; 
			header('location: register');
		}
		else{
			
		$fusername=$username;
		
		$password = check_input($_POST["password"]);
		$fpassword=md5($password);
		
		mysqli_query($conn,"insert into `usersname` (username, password) values ('$fusername', '$fpassword')");
		
		$_SESSION['msg'] = "Sign up successful. You may login now!"; 

		header('location: login');
		}
	}
?>