
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title> {{ $data3->title }} </title>
  <meta content="" name="description">
  <meta content="" name="author">
  <meta content="" name="keywords">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="http://www.11-76.com/themes/the-one-responsive/css/plugins.css" media="all" rel="stylesheet" type="text/css">
  <link href="http://www.11-76.com/themes/the-one-responsive/css/style.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7COswald:300,400,700" rel="stylesheet" type="text/css"><!-- google fonts end -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js">
  </script>
  <!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#video1").bind('ended', function(){
      location.href="/";
    });
  });
  </script> -->
</head>
<body>
  <div class="preloader-bg"></div>
  <div id="preloader">
    <div id="preloader-status">
      <div class="preloader-position loader">
        <span></span>
      </div>
    </div>
  </div>
  <!-- <div class="border-top top-position" style="background: #fff">
    <div class="social-icons-wrapper fadeIn-element">
      <table border="0">
        <tr>
          <td style="vertical-align: middle"><img src="/assets/icon/instagram.png" width="25px" height="25px"></td>
          <td style="vertical-align: middle; padding-left:5px"> <span id="header_social" style="color: #000"></span> </td>
        </tr>
      </table>
    </div>

    <div class="languages" style="vertical-align: middle; color: #fff; padding-right:25px">
      <table border="0">
        <tr>
          <td style="vertical-align: middle; color: #fff; padding-right:25px"><img src="/assets/icon/indonesia.png" width="15px" height="15px"> ID </td>
        </tr>
      </table>
    </div>

    <div class="template-title fadeIn-element">
      <span id="page_title" style="color: #000"></span>
    </div>

    <div class="location-launcher fadeIn-element">
      <a class="location-modal-launcher"> <span id="header_left" style="color: #000"></span> </a>
    </div>
    <div class="contact-launcher fadeIn-element">
      <a class="contact-modal-launcher"> <span id="header_right" style="color: #000"></span></a>
    </div>
  </div> -->

  <div class="border-bottom-menu bottom-position">
    <div class="fadeIn-element" id="menu">
      <nav class="menu">
        <ul>
          <li><a href="#home"><p id="time"></p></a></li>
        </ul>
      </nav>
    </div>
    <div class="credits fadeIn-element">
      <a class="toggle-credits-content"><span>
        <span id="content_right"></span>
      </span></a>
    </div>
  </div>

  <div class="border-bottom bottom-position">
    <marquee scrolldelay="125" width="100%">
      <font font size="4"><span id="footer_lines"></span></font>
    </marquee>
    <center> <a href="#"> <span id="footer"></span> </a> </center>
  </div>
  <!-- main container start -->
  <div id="containerOT">
    <div class="hero-fullscreen overlay cover-all-video">

        @if ( count($data2) != false )
        @foreach ( $data2 as $item )
        <video id="video1" src="EXILEDNONAME/files/{{ $item->file }}" autoplay muted></video>
        <!-- <div class="hero-bg" data-vide-bg="EXILEDNONAME/files/{{ $item->file }}" data-vide-options="loop: true, muted: true, position: 0% 0%" id="video-bg"></div> -->
        @endforeach
        @else
        <video id="video1" src="EXILEDNONAME/files/404.mp4" autoplay muted></video>
        @endif

    </div>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
  <script src="http://www.11-76.com/themes/the-one-responsive/js/plugins.js" type="text/javascript"></script>
  <script src="http://www.11-76.com/themes/the-one-responsive/js/the-one.js" type="text/javascript"></script>

  <script>
  // AUTO REFRESH DATETIME
  setInterval(
    function() {
      $.get("/data/datetime.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('time');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  // AUTO REFRESH PAGE TITLE
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/page_title.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('page_title');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  // AUTO REFRESH HEADER LEFT
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/header_left.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('header_left');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  // AUTO REFRESH HEADER RIGHT
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/header_right.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('header_right');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  // AUTO REFRESH CONTENT RIGHT
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/content_right.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('content_right');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  // AUTO REFRESH FOOTER
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/footer.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('footer');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  // AUTO REFRESH FOOTER LINES
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/footer_lines.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('footer_lines');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/header_social.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('header_social');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );
  </script>
  <script type="text/javascript">
  document.getElementById('video1').addEventListener('ended',function(){
     window.location.href = '/';
 },false);
 </script>
</body>
</html>
