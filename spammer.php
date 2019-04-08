<?php
include('session.php');
include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DoraEZ</title>
    <link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/smooth.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

 <style type="text/css">
  body
  {
      background: url(img/bg1.jpg) no-repeat center fixed;
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
            <li><a href="download">ดาวน์โหลด</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100033611693024" target="_blank">ติดต่อเรา</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">เมนูเสริม <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">ชื่อผู้ใช้</li>
                <li><a><?php echo $user; ?></a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">โปรแกรม</li>
                <li class="active"><a href="spammer">สแปมเมอร์</a></li>
                <li><a href="profile">โปรไฟล์การ์ด</a></li>
                <li><a href="checktoken">เช็คโทเคน</a></li>
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

    <div class="container animated fadeInUp" style="margin-top:200px;">
  <div class="border border-dark">
    <div class="panel-heading" style="color:white; background: rgba(192, 192, 192, 0.5) !important;"><h2><i class="fab fa-facebook"></i>&nbsp;Spammer</h2></div>
  <div class="panel-body text-white" style="background: rgba(0, 0, 0,0.8) !important;">  
  <center>
   </form>
  </button>
<div class="row justify-content-md-center">
  <div class="col-xs-12">
  <div id="running" class="alert alert-info text-center"><span class="fa fa-spin fa-sync-alt"></span>&nbsp;กำลังทำงาน...</div>
</div>
</div><br>
<center>
<p><font color=“#64f6f7”/ชื่อสี”> กรอกเบอร์ที่ท่านต้องการยิง</p></font>
<input type="text" name="number" class="form-control" placeholder="กรอกเบอร์ เช่น 0912345678" id="number">
<p><font color=“#64f6f7”/ชื่อสี”> ชนิดยิง</p></font>
<select class="form-control" id="type" style="margin-top: 15px;">
      <option selected="">เลือก</option>
      <option value="SMS">SMS</option>
      <option value="CALL">CALL</option>
      <option value="ALL">SMS AND CALL</option>
    </select>
    <p><font color=“#64f6f7”/ชื่อสี”> แนะนำทุกๆ 5 วินาที</p></font>
  <input type="text" class="form-control" placeholder="ความหน่วงเวลา เเนะนำ 5 วินาที" id="time" value="5">
<p><font color=“#64f6f7”/ชื่อสี”> *คำเตือน โปรดอย่าโทรไปยังหมายเลขที่เกี่ยวกับประเทศชาติหรืออะไรต่างๆ* พบเห็นระงับทันที</p></font>

  <center>
<button type="button" class="btn btn-success" id="start">Start เริ่มต้น</button>
<button type="button" class="btn btn-danger" id="stop">ยกเลิก</button>
</center>
</div>
</div>
<script type="text/javascript">
$( "#running" ).hide();
$( "#stop" ).hide();
function spammer() {
 var num = $( "#number" ).val();
 var tpe = $( "#type" ).val();
 var tme = $( "#time" ).val();
 var today = new Date();
 var now = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
 var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    $.post("grab.php",
  {
    number: num,
    type: tpe
  },
  function(data, status){
    setTimeout(spammer, tme * 1000);
  });
  //end
}

$(document).ready(function(){
$( "#start" ).click(function() {
spammer();
  $( "#running" ).show();
  $( "#start" ).hide();
  $( "#stop" ).show();
});
$( "#stop" ).click(function() {
  window.location.href = '';
});
});
</script> <br>
  </center>
  </div>
  </div>
  </div>
  <footer class="animated fadeInUp" style="position: relative;">
   <div class="text-center text-dark" style="padding:9px;">
   </div>
   </footer>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

  </body>
</html>
