			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
<!DOCTYPE html>
<html>
<head>
	<title>DoraEZ</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Montserrat" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<style>
	#login_form{
		width:500px;
		height:370px;
		position:relative;
		top:200px;
		margin: auto;
		padding: auto;
	}

body {
     background: url(img/bg06.jpg) no-repeat center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family:"Kanit", sans-serif;
    color: black;
  }
</style>
</head>
<body>
<div class="container animated fadeInUp">
	<div id="login_form" class="well">
		<h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
		<hr>
		<form method="POST" action="action_login">
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button> No account? <a href="register"> Sign up</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">About Me !!</button>
  		<div id="demo" class="collapse">
    	© 2019 DoraEZ-Hacked | เปิดโล่ เช็คโทเคน สแปมเมอร์ โปรเจคPHPต่างๆ
  		</div>
		</div>
	</div>
</div>
</body>
</html>