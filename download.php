<?php
include('session.php');
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DoraEZ</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Montserrat" rel="stylesheet">
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
      background: url(img/bg3.jpg) no-repeat center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family:"Kanit", sans-serif;
    color: black;
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
  </head>
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
            <li class="active"><a href="download">ดาวน์โหลด</a></li>
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
                <li><a href="checktoken">เช็คโทเคน</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">เมนูสมาชิก</li>
                <li class="active"><a href="download">ดาวน์โหลด</a></li>
                <li><a href="logout">ออกจากระบบ</a></li>
            </li>
          </ul>
          <li><a href=""><div id="txt"></div></a></li>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- Fixed navbar -->

        <div class="col-xs-12">
            <div class="panel panel-default" style="margin: 70px 400px;">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> ดาวน์โหลด  >> [ โปรเจคที่รวบรวมไว้ ]</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
							<thead>
  	      <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" >
        <tr>
        <th width="6%"><div align="center" class="style3">ลำดับ</div></th>
        <th width="34%"><div align="center" class="style3">โปรแกรม</div></th>
		<th width="12%"><div align="center" class="style3">โพสต์โดย</div></th>
        <th width="28%"><div align="center" class="style3">ดาวน์โหลด</div></th>
        </tr>
		<tr>
        <td><div align="center" class="style2">1</div></td>
        <td><div align="center" class="style2">เว็บ OBS Stream Instagram บน PC </div></td>
		<td><div align="center" class="style2">จอห์น ริปเปอร์ </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!zRYTXaQY!a2BI2cHV9043wa_T9hjs5tifSRKs2rGOewhq83I7ciI';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>
        <tr>
        <td><div align="center" class="style2">2</div></td>
        <td><div align="center" class="style2">Spammer แบบ Website </div></td>
		<td><div align="center" class="style2">Suphawat Moongrongklang </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!rUBR1KiZ!fdl-5q51Z8nbJidAC8XAQLn7NVI--Zc72kewZCAYzmE';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">3</div></td>
        <td><div align="center" class="style2">Truewallet-Website </div></td>
		<td><div align="center" class="style2">วีรพงศ์ ยั่งยืน </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!zE5ylYSS!YKGRWkQikcARcjxEKLyKbi26a8q6CPLNLku-fwqNwmE';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">4</div></td>
        <td><div align="center" class="style2">เว็บสำหรับย่อ URL </div></td>
		<td><div align="center" class="style2">Бигӯ Кола </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!3YpWlagZ!LYOjI78yIWD_eggKoszKyQZKmzf1ICtjehwrk3GOUUw';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">5</div></td>
        <td><div align="center" class="style2">สคริป PHP ทำลิงค์ดาวน์โหลดชั่วคราว </div></td>
		<td><div align="center" class="style2">Jiraphat Yuenying </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!eVhHUSYR!lw7IDvGWDSWBUb8PDX4kqAPB047VQNMDe4KMkp-4AVc';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">6</div></td>
        <td><div align="center" class="style2">Ecommerce-master </div></td>
		<td><div align="center" class="style2">Бигӯ Кола </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!WB4jAYxJ!O_0SZu7a_lO68wuNClJVn8ImEU6WVHUNwbU68u7N7zs';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">7</div></td>
        <td><div align="center" class="style2">เว็บแบบ TS3ESport</div></td>
		<td><div align="center" class="style2">Teerapat Jumpeeprom </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!LBAAwAgZ!cmu1VKZP1bPH6D37FjGUP8Q4iTqg9XzGZybGkGAC8c4';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">8</div></td>
        <td><div align="center" class="style2">การทำแจ้งเตือนไลน์ผ่าน PHP </div></td>
		<td><div align="center" class="style2">Jiraphat Yuenying </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!ydYknYxY!xsXc2igdkYYpzeLdnRwayTZg7xAX8j_i8l0c_-zi1U8';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">9</div></td>
        <td><div align="center" class="style2">ระบบห้องแชทออนไลน์ (PHP, MySQL, AJAX) </div></td>
		<td><div align="center" class="style2">วีรพงศ์ ยั่งยืน </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!mcR0HayK!P9wG4iPqTVw-bvOHCpT3FoMYQjRhtmazSHbI0eqz67c';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">10</div></td>
        <td><div align="center" class="style2">Google Drive proxy script stream jwplayer </div></td>
		<td><div align="center" class="style2">กร ณฐกร </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!eNIkFaDR!DB62_Qv-igo3OPH0UqmV25uygUyWpUa2KmIG1cnm5Ro';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
        <tr>
        <td><div align="center" class="style2">11</div></td>
        <td><div align="center" class="style2">ตัวสมัคร/ขุด Tokenบนเว็บ </div></td>
		<td><div align="center" class="style2">Peerapat Nunat </div></td>
		<td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!3YpWlagZ!LYOjI78yIWD_eggKoszKyQZKmzf1ICtjehwrk3GOUUw';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>
            <tr>
        <td><div align="center" class="style2">11</div></td>
        <td><div align="center" class="style2">API Wallet ใช้เลขอ้างอิง</div></td>
        <td><div align="center" class="style2">Maythiwat Chomchuen </div></td>
        <td><div align="center"><button type="submit" class="btn btn-success animated flash btn-block Kanit-Fonts" onclick="location.href='https://mega.nz/#!LJwUHK5Z!VajRyToqZ_5SUrt12frsQvIl6U2jGJtek1cZIblahLE';"><span class="Kanit-Fonts"><i class="fa fa-cloud-download"></i> ดาวน์โหลด</span></button></td>               
						</table>
						</thead>
						</div>
                    </div>
                </div>
            </div>
        </div>
     </div>   
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
  </body>
</html>

