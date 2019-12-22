
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> {{ $data3->title }} </title>
  <meta content="" name="description">
  <meta content="" name="author">
  <meta content="" name="keywords">
  <meta http-equiv="refresh" content="{{ $data3->timer_slider_image }}; URL='/main'" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="/assets/css/exilednoname.css" media="all" rel="stylesheet" type="text/css">
  <!-- <link href="/assets/css/main.css" media="all" rel="stylesheet" type="text/css"> -->
  <link href="http://www.11-76.com/themes/the-one-responsive/css/style.css" media="all" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body class="body-light">
  <div class="preloader-bg preloader-bg-light"></div>
  <div class="preloader-light" id="preloader">
    <div id="preloader-status">
      <div class="preloader-position loader loader-light">
        <span></span>
      </div>
    </div>
  </div>

  <div class="border-top top-position" style="background: #fff">
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
  </div>

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
  <div id="containerOT">
    <div class="hero-fullscreen">
      <div class="hero-bg">
        <div class="swiper-container swiper-slider-top-thumbs-vertical">
          <div class="swiper-wrapper">
            @foreach ( $data1 as $item )
            <div class="swiper-slide overlay cover-all" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
            @endforeach
          </div>
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper-slider-bottom-thumbs-vertical" style="background-color: #ffffff">
          <div class="swiper-wrapper">
            @foreach ( $data4 as $item )
            <div class="swiper-slide" style="background: linear-gradient(to right, yellow, orange, blue); background: -webkit-linear-gradient(left, yellow , orange, blue); background: -o-linear-gradient(right, yellow, orange, blue); background: -moz-linear-gradient(right, yellow, orange, blue); padding: 5px; border: 1px; -webkit-border-radius: 10px 10px; ">
              <span style="font-size: 95%">
                <b>{{ $item->name }} : </b><br>
                {{ $item->description }}
              </span>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MAIN SCRIPT -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script> -->
  <script src="http://www.11-76.com/themes/the-one-responsive/js/plugins.js" type="text/javascript"></script>
  <script src="http://www.11-76.com/themes/the-one-responsive/js/the-one.js" type="text/javascript"></script>
  <!-- // MAIN SCRIPT -->

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
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/timer_slider_image.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('timer_slider_image');
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
</body>
</html>
