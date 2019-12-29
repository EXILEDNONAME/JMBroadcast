<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            {{ $data3->title }}
        </title>
        <meta content="" name="description">
        <meta content="" name="author">
        <meta content="" name="keywords">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <link href="http://www.11-76.com/themes/the-one-responsive/css/plugins.css" media="all" rel="stylesheet" type="text/css">
        <link href="http://www.11-76.com/themes/the-one-responsive/css/style.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7COswald:300,400,700" rel="stylesheet" type="text/css"><!-- google fonts end -->
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

        <!-- <div class="border-top top-position" style="background-image: radial-gradient(circle, #0000ff, #0000ff, #000080);"> -->
        <div class="border-top top-position" style="border-bottom: 1px solid #fff; background-image: linear-gradient(#000080, #0000ff, #000080)">

            <div class="social-icons-wrapper fadeIn-element">
                <ul class="social-icons">
                    <li class="social-icon">
                        <a class="ion-social-twitter" href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="instagram-feed-mobile-launcher toggle-instagram-feed-content fadeIn-element">
                <a class="ion-social-instagram" href="#"></a>
            </div>

            <div class="languages fadeIn-element">
                <ul>
                    <li class="active">
                        <a href="#">EN</a>
                    </li>
                    <li>
                        <a href="#">FR</a>
                    </li>
                    <li>
                        <a href="#">DE</a>
                    </li>
                </ul>
            </div>

            <div class="template-title fadeIn-element">
                <span id="page_title" style="color: #fff"></span>
            </div>

            <div class="location-launcher fadeIn-element">
                <a class="location-modal-launcher">Location</a>
            </div>

            <!-- HEADER RIGHT -->
            <div class="contact-launcher fadeIn-element">
                <a class="contact-modal-launcher"><span id="header_right" style="color: #000"></span></a>
            </div>
            <!-- // HEADER RIGHT -->

        </div>

        <div class="border-bottom-menu bottom-position" style="border-top: 1px solid #fff; background-image: radial-gradient(circle, #ecc003, #ecc003, #262626">
            <!-- menu start -->
            <div class="fadeIn-element" id="menu">
                <nav class="menu">
                    <ul>
                        <li>
                            <a href="#home">Home</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="credits fadeIn-element">
                <a class="toggle-credits-content"><span>Photo Credit</span></a>
            </div>
        </div>


        <div class="border-bottom bottom-position">
            <div class="menu-mobile">
                <nav class="menu" id="menu-mobile">
                    <ul>
                        <li>
                            <ul>
                                <li class="lifting">
                                    <a href="#home">Home</a>
                                </li>
                            </ul><a class="menu-trigger ion-android-menu" href="#"></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="copyright fadeIn-element">
                <a href="#">The One &copy;2017 All Rights Reserved.</a>
            </div>
            <div id="subscribe-wrapper">
                <div id="newsletter">
                    <div class="newsletter fadeIn-element">
                        <form action="subscribe.php" id="subscribe" method="post" name="subscribe">
                            <input class="subscribe-requiredField subscribe-email" id="subscribe-email" name="subscribe-email" placeholder="Email" type="text"> <button class=
                            "btn btn-padding btn-pc c-btn c-btn-inverse"><span class="btn-label">Subscribe</span></button> <button class="btn btn-padding btn-mobile c-btn c-btn-inverse"><span class=
                            "btn-label"><i class="ion-android-send"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="containerOT">
            <div class="hero-fullscreen">
                <div class="hero-bg">
                    <div class="swiper-container swiper-slider-top-thumbs-vertical">
                        <div class="swiper-wrapper">
                          @foreach ( $data1 as $item )
                          <div class="swiper-slide overlay cover-all" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
                          <div class="swiper-slide overlay cover-all" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
                          <div class="swiper-slide overlay cover-all" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
                          @endforeach
                        </div>
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container swiper-slider-bottom-thumbs-vertical" style="background-image: linear-gradient(-90deg, red, #fff);">
                        <div class="swiper-wrapper">
                          @foreach ( $data1 as $item )
                          <div class="swiper-slide" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
                          <div class="swiper-slide" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
                          <div class="swiper-slide" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="location-modal">

                <div id="map-wrapper">
                    <div id="map"></div>
                </div>
            </div>
            <div class="panel-left-credits panel-left-bg-credits"></div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
        <script src="http://www.11-76.com/themes/the-one-responsive/js/plugins.js" type="text/javascript"></script>
        <script src="http://www.11-76.com/themes/the-one-responsive/js/the-one.js" type="text/javascript"></script><!-- scripts end -->


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
