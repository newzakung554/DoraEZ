<?php
include('session.php');
include('conn.php');
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DoraEZ</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 <style type="text/css">
  body
  {
      background: url(img/bg5.jpg) no-repeat center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family:"Kanit", sans-serif;
    color: black;
  }
  </style>
	</head>
		</nav>
			<style type="text/css">
	h2 {
    color: white;
    text-shadow: 0 0 0.2em #87F, 0 0 0.2em #87F, 0 0 0.2em #87F;
}
	h5 {
    font-family: auto;
    color: white;
}
	h7 {
    font-family: auto;
    color: white;
}
.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f500;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.panel {
    margin-bottom: 20px;
    background-color: #ffffff4a;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.panel-info>.panel-heading {
    color: #ffffff;
    background-color: #000000c2;
    border-color: #2b2b2b;
}
	</style>
      <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<body onload="startTime()">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">DoraEZ</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DoraEZ-Hacked</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index">หน้าแรก</a></li>
            <li><a href="download">ดาวน์โหลด</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100033611693024" target="_blank">ติดต่อเรา</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">เมนูเสริม <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">ชื่อผู้ใช้</li>
                <li><a><?php echo $user; ?></a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">โปรแกรม</li>
                <li><a href="spammer">สแปมเมอร์</a></li>
                <li><a href="profile">โปรไฟล์การ์ด</a></li>
                <li class="active"><a href="checktoken">เช็คโทเคน</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">เมนูสมาชิก</li>
                <li><a href="download">ดาวน์โหลด</a></li>
                <li><a href="logout">ออกจากระบบ</a></li>
            </li>
          </ul>
          <li><a href=""><div id="txt"></div></a></li>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- Fixed navbar -->

		<div class="container">
			<div class="panel panel-primary" style="margin: 100px 0px;">
				<div class="panel-heading"><center><h4>Check Access Token</a></h4></center></div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="token"> List Access Token </label>
								<textarea class="form-control" rows="5" id="token" placeholder="ใส่ Token ที่นี่" ></textarea>
							</div>
							<button class="btn btn-info btn-block" id="run">ตรวจ TOKEN</button>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="list_live" class="text-default">Token ที่ใช้ได้ ( <b id="lives">0</b> )  </label>
								<textarea class="form-control" rows="5" id="list_live" placeholder="" onclick="select(this)" readonly="" required></textarea>
							</div>
							<button class="btn btn-danger btn-block" type="button" onclick="CopyToken(this, 'list_live')" >
							Copy All
							</button>
						</div>
					</div><hr>
					
					<div class="row" id="result" style="display: none;">
						
						<div class="col-md-12">
							<center>
								<div id="list_fb">
								</div>
							</center>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div id="done"></div>
		<script type="text/javascript">
			var _0xb283=["\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x72\x61\x70\x68\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F\x6D\x65\x3F\x61\x63\x63\x65\x73\x73\x5F\x74\x6F\x6B\x65\x6E\x3D","\x26\x66\x6F\x72\x6D\x61\x74\x3D\x6A\x73\x6F\x6E\x26\x6D\x65\x74\x68\x6F\x64\x3D\x67\x65\x74","\x69\x64","\x6E\x61\x6D\x65","\x74\x65\x78\x74","\x23\x6C\x69\x76\x65\x73","\x0A","\x61\x70\x70\x65\x6E\x64","\x23\x6C\x69\x73\x74\x5F\x6C\x69\x76\x65","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x6F\x6C\x2D\x6D\x64\x2D\x34\x27\x3E\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x61\x72\x64\x20\x62\x67\x2D\x6C\x69\x67\x68\x74\x20\x6D\x62\x2D\x35\x27\x3E\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x63\x61\x72\x64\x2D\x68\x65\x61\x64\x65\x72\x27\x3E\x3C\x61\x20\x68\x72\x65\x66\x3D\x27\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F","\x27\x20\x74\x61\x72\x67\x65\x74\x3D\x27\x5F\x62\x6C\x61\x6E\x6B\x27\x3E\x3C\x69\x6D\x67\x20\x73\x72\x63\x3D\x27\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x72\x61\x70\x68\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F","\x2F\x70\x69\x63\x74\x75\x72\x65\x3F\x77\x69\x64\x74\x68\x3D\x31\x36\x30\x26\x68\x65\x69\x67\x68\x74\x3D\x31\x36\x30\x27\x20\x20\x77\x69\x64\x74\x68\x3D\x27\x31\x32\x30\x70\x78\x27\x3E\x20\x3C\x2F\x61\x3E\x3C\x68\x33\x3E\x3C\x61\x20\x68\x72\x65\x66\x3D\x27\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F","\x27\x20\x74\x61\x72\x67\x65\x74\x3D\x27\x5F\x62\x6C\x61\x6E\x6B\x27\x3E","\x3C\x2F\x61\x3E\x3C\x2F\x68\x33\x3E\x3C\x2F\x64\x69\x76\x3E\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x66\x6F\x72\x6D\x2D\x67\x72\x6F\x75\x70\x27\x3E\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x69\x6E\x70\x75\x74\x2D\x67\x72\x6F\x75\x70\x20\x6D\x62\x2D\x33\x27\x3E\x3C\x69\x6E\x70\x75\x74\x20\x74\x79\x70\x65\x3D\x27\x74\x65\x78\x74\x27\x20\x63\x6C\x61\x73\x73\x3D\x27\x66\x6F\x72\x6D\x2D\x63\x6F\x6E\x74\x72\x6F\x6C\x27\x20\x76\x61\x6C\x75\x65\x3D\x27","\x27\x20\x69\x64\x3D\x27","\x27\x20\x6E\x61\x6D\x65\x3D\x27","\x27\x20\x6F\x6E\x63\x6C\x69\x63\x6B\x3D\x27\x73\x65\x6C\x65\x63\x74\x28\x74\x68\x69\x73\x29\x27\x20\x72\x65\x61\x64\x6F\x6E\x6C\x79\x3D\x27\x27\x20\x72\x65\x71\x75\x69\x72\x65\x64\x3E\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x27\x69\x6E\x70\x75\x74\x2D\x67\x72\x6F\x75\x70\x2D\x62\x74\x6E\x27\x3E\x3C\x62\x75\x74\x74\x6F\x6E\x20\x20\x6F\x6E\x63\x6C\x69\x63\x6B\x3D\x27\x43\x6F\x70\x79\x54\x6F\x6B\x65\x6E\x28\x74\x68\x69\x73\x2C","\x29\x27\x20\x20\x63\x6C\x61\x73\x73\x3D\x27\x62\x74\x6E\x20\x62\x74\x6E\x2D\x64\x61\x6E\x67\x65\x72\x27\x3E\x43\x6F\x70\x79\x3C\x2F\x62\x75\x74\x74\x6F\x6E\x3E\x3C\x2F\x64\x69\x76\x3E\x3C\x2F\x64\x69\x76\x3E\x3C\x2F\x64\x69\x76\x3E\x3C\x2F\x64\x69\x76\x3E\x3C\x2F\x64\x69\x76\x3E","\x23\x6C\x69\x73\x74\x5F\x66\x62","\x67\x65\x74","\x64\x69\x73\x70\x6C\x61\x79","\x62\x6C\x6F\x63\x6B","\x63\x73\x73","\x23\x72\x65\x73\x75\x6C\x74","\x30","","\x73\x70\x6C\x69\x74","\x76\x61\x6C","\x23\x74\x6F\x6B\x65\x6E","\x74\x72\x69\x6D","\x6C\x65\x6E\x67\x74\x68","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x72\x61\x70\x68\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F\x6D\x65\x2F","\x63\x6C\x69\x63\x6B","\x23\x72\x75\x6E"];function checkToken(_0x3471x2){$[_0xb283[19]](_0xb283[0]+ _0x3471x2+ _0xb283[1],function(_0x3471x3){var _0x3471x4=_0x3471x3[_0xb283[2]];var _0x3471x5=_0x3471x3[_0xb283[3]];$(_0xb283[5])[_0xb283[4]](parseInt($(_0xb283[5])[_0xb283[4]]())+ 1);$(_0xb283[8])[_0xb283[7]](_0x3471x2+ _0xb283[6]);$(_0xb283[18])[_0xb283[7]](_0xb283[9]+ _0x3471x4+ _0xb283[10]+ _0x3471x4+ _0xb283[11]+ _0x3471x4+ _0xb283[12]+ _0x3471x5+ _0xb283[13]+ _0x3471x2+ _0xb283[14]+ _0x3471x4+ _0xb283[15]+ _0x3471x5+ _0xb283[16]+ _0x3471x4+ _0xb283[17])})}$(_0xb283[33])[_0xb283[32]](function(){$(_0xb283[23])[_0xb283[22]](_0xb283[20],_0xb283[21]);$(_0xb283[5])[_0xb283[4]](_0xb283[24]);$(_0xb283[8])[_0xb283[4]](_0xb283[25]);$(_0xb283[18])[_0xb283[4]](_0xb283[25]);var _0x3471x6=$[_0xb283[29]]($(_0xb283[28])[_0xb283[27]]())[_0xb283[26]](_0xb283[6]);for(var _0x3471x7=0;_0x3471x7< _0x3471x6[_0xb283[30]];_0x3471x7++){var _0x3471x8=_0xb283[31];var _0x3471x9=_0x3471x6[_0x3471x7];checkToken(_0x3471x9)}})
		</script>
		<script>
			function CopyToken(elmnt,clr) {
				var copyText = document.getElementById(clr);
				copyText.select();
				document.execCommand("copy");
				alert("คัดลอก TOKEN ทั้งหมด สำเร็จแล้ว");
			}
		</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

  </body>
</html>