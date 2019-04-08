<?php
  include('conn.php');
  include('session.php');
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
    <link href="css/all.css" rel="stylesheet">
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
      background: url(img/bg2.jpg) no-repeat center fixed;
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
<script>
swal("ยินดีต้อนรับ", "<?php echo $user; ?>", "success");
</script>
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
            <li class="active"><a href="index">หน้าแรก</a></li>
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

  <!-- Carousel -->
  <div class="col-xs-12">
    <div class="container">
  <div class="panel panel-info" style="margin: 70px 0px">
    <div class="panel-heading"><i class="far fa-newspaper"></i> ประชาสัมพันธ์</div>
    <div class="panel-body">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position:relative;z-index:1;">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="z-index:1 !important">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <div class="item">
        <img src="https://scontent.fbkk23-1.fna.fbcdn.net/v/t1.15752-9/56286764_2258617341057446_3361182766661107712_n.png?_nc_cat=106&_nc_ht=scontent.fbkk23-1.fna&oh=ba56dcc42810a776f9bae5f3580ee6c2&oe=5D4A6334" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>เช็คโทเคน</h3>
          <p>สามารถเช็คโทเคนว่าสามารถใช้งานได้จริงหรือไม่ !</p>
        </div>
      </div>

      <div class="item active">
        <img src="https://scontent.fbkk23-1.fna.fbcdn.net/v/t1.15752-9/56312078_2251208961568123_4911596291852599296_n.png?_nc_cat=103&_nc_ht=scontent.fbkk23-1.fna&oh=ca433be91285e93cf8a5665cd02fb4e4&oe=5D4E8371" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>สแปมเมอร์</h3>
          <p>ยิงเบอร์และข้อความเพื่อก่อกวนและปั่นปราสาท !</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://scontent.fbkk23-1.fna.fbcdn.net/v/t1.15752-9/56436487_2423423064420950_5640377866035134464_n.png?_nc_cat=104&_nc_ht=scontent.fbkk23-1.fna&oh=c55c7142d5471ae7a4d6eb6e367f9700&oe=5D3625A1" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>โปรไฟล์การ์ด</h3>
          <p>เปิดโล่ป้องกันคนโขมยภาพโปรไฟล์ เฟสบุ๊ค!</p>
        </div>
      </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
   </div>
  </div>
 </div>
</div>
  <!-- Carousel -->

      <!-- Rules -->
            <div class="col-xs-12">
                  <div class="container">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fal fa-calendar-edit"></i> ข้อตกลงในการใช้งานเว็บไซต์</div>
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-10">
                                    <h5 class="mg-bot-2">
                                        <span class="fa fa-lock" aria-hidden="true"></span><a href="#"> 1.ห้ามนำไปขายโดยเด็ดขาด !!</a>
                                     </h5>
                                    <small class="text-muted">ออกกฏโดย <a href="#" style="color:#FF0000;">DoraEZ</a> เมื่อ 6 เมษายน 2562</small>
                                </div>
                            </div>
                            <hr class="topic-list-separate">
                                <div class="row">
                                <div class="col-xs-10">
                                    <h5 class="mg-bot-2">
                                        <span class="fa fa-lock" aria-hidden="true"></span><a href="#"> 2.ห้ามขายโดยเด็ดขาด !!</a>
                                     </h5>
                                    <small class="text-muted">ออกกฏโดย <a href="#" style="color:#FF0000;">DoraEZ</a> เมื่อ 6 เมษายน 2562</small>
                                </div>
                            </div>
                            <hr class="topic-list-separate">
                                              <div class="row">
                                <div class="col-xs-10">
                                    <h5 class="mg-bot-2">
                                        <span class="fa fa-lock" aria-hidden="true"></span><a href="#"> 3.ก็ห้ามขายโดยเด็ดขาด !!</a>
                                     </h5>
                                    <small class="text-muted">ออกกฏโดย <a href="#" style="color:#FF0000;">DoraEZ</a> เมื่อ 6 เมษายน 2562</small>
                                </div>
                            </div>
                            <hr class="topic-list-separate">
              
                           </div>
                    </div>
                </div>    
      <!-- Rules -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

  </body>
</html>