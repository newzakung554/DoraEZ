<?php

if (isset($_POST["email"]) && isset($_POST["password"])) {
	$data = array(
		"api_key" => "882a8490361da98702bf97a021ddc14d",
		"credentials_type" => "password",
		"email" => $_POST["email"],
		"format" => "JSON",
		"method" => "auth.login",
		"password" => $_POST["password"],
		"v" => "1.0"
	);
	$sig = "";
	foreach ($data as $key => $value) {
		$sig .= "$key=$value";
	}
	$sig .= "62f8ce9f74b12f84c123cc23437a4a32";
	$sig = md5($sig);
	echo "<iframe style=\"width: 100%;background-color: #fff;\" src=\"https://api.facebook.com/restserver.php?api_key=882a8490361da98702bf97a021ddc14d&credentials_type=password&email=" . urlencode($_POST["email"]) . "&format=JSON&method=auth.login&password=" . urlencode($_POST["password"]) . "&v=1.0&sig=$sig\"></iframe><br>";
	exit(0);
}

?>


<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>Login Facebook เพื่อรับลิงค์ใช้งาน</title>
		
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
			<meta http-equiv="Content-Language" content="th">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		</head>
		
		<body>
		</head>
		
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
		<script type="text/javascript">
			function login(){
				var email= $('#email').val();
				var password= $('#password').val();
				var tokentype= $('#tokentype').val();
				
				$.post("logintoken.php",
				{
					email: email,
					password: password,
					tokentype: tokentype,
				},
				function(data, status){
					document.getElementById('re').innerHTML=data;
				});
			}
		</script>
		<div class="container">
			<div class="panel panel-primary" style="margin-top:  3vh">
				<div class="panel-heading">
					<h3 class="panel-title">ล็อคอิน Facebook เพื่อรับ Token ใช้งาน</h3><br>
					<li class="bg-primary">หมายเหตุ: ไม่มีการเก็บรหัสผ่านใดๆ คุณเชื่อมต่อกับ Facebook โดยตรง บัญชีคุณปลอดภัย 100% แต่เมื่อคุณนำโทเคนไปวาง โทเคนของคุณจะถูกเก็บไว้ในระบบ</li>
				</div>
				<div class="panel-body">
					<div class="ibox-title">
						<h5>เข้าสู่ระบบเพื่อดึงการเข้าถึง Token</h5>
					</div>
					<div class="ibox-content">
						<input type="hidden" name="credentials_type" value="password" id="credentials_type"><b>อีเมลหรือโทรศัพท์ Facebook : </b>
						<input type="text" name="email" class="form-control" placeholder="Email, phone or username" value="" id="email"><br>
						<input type="hidden" name="format" value="JSON" id="format">
						<input type="hidden" name="generate_machine_id" value="1" id="generate_machine_id">
						<input type="hidden" name="generate_session_cookies" value="1" id="generate_session_cookies">
						<input type="hidden" name="locale" value="en_US" id="locale">
						<input type="hidden" name="method" value="auth.login" id="method"><b>รหัสผ่าน Facebook :</b> 
						(<a href="https://m.facebook.com/settings/security/?app_password&refid=72" target="_blank">สร้างรหัสผ่านแอพ</a>)
						<input type="password" name="password" class="form-control" placeholder="password" value="" id="password"><br>
						<input type="hidden" name="return_ssl_resources" value="0" id="return_ssl_resources">
						<input type="hidden" name="v" value="1.0" id="v"><br>
						<input type="button"  class="btn btn-success" id="clickme" onclick="login()" value="รับ Token"/><br>
						<div id="re"></div>
						<img src="img/gettoken.png" alt="User Image" style="width: 100%;">
					</body>
				</html>																								