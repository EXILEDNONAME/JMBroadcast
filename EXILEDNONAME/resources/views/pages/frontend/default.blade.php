
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> {{ $data3->title }} </title>
  <meta content="" name="description">
  <meta content="" name="author">
  <meta content="" name="keywords">
  <meta http-equiv="refresh" content="4; URL='/main'" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="http://www.11-76.com/themes/the-one-responsive/css/plugins.css" media="all" rel="stylesheet" type="text/css">
  <link href="/assets/css/exilednoname1.css" media="all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7COswald:300,400,700" rel="stylesheet" type="text/css"><!-- google fonts end -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
  <!-- preloader start -->
  <div class="preloader-bg"></div>
  <div id="preloader">
    <div id="preloader-status">
      <div class="preloader-position loader">
        <span></span>
      </div>
    </div>
  </div><!-- preloader end -->
  <!-- border top start -->
  <div class="border-top top-position">
    <!-- social icons start -->
    <div class="social-icons-wrapper fadeIn-element">
      <ul class="social-icons">
        <img src="/assets/icon/instagram.png" width="25px" height="25px">
        <img src="/assets/icon/facebook.png" width="25px" height="25px">
      </li>
    </ul>
  </div><!-- social icons end -->
  <!-- instagram feed mobile launcher start -->
  <div class="instagram-feed-mobile-launcher toggle-instagram-feed-content fadeIn-element">
    <a class="ion-social-instagram" href="#"></a>
  </div><!-- instagram feed mobile launcher end -->
  <!-- language bar start -->
  <div class="languages fadeIn-element">
    <ul>
      <li class="active"><a href="#">EN</a></li>
      <li><a href="#">FR</a></li>
      <li><a href="#">DE</a></li>
    </ul>
  </div>

  <div class="template-title fadeIn-element">
    <span id="page_title"></span>
  </div>

  <div class="location-launcher fadeIn-element">
    <a class="location-modal-launcher"> <span id="header_left"></span> </a>
  </div>
  <div class="contact-launcher fadeIn-element">
    <a class="contact-modal-launcher"> <span id="header_right"></span></a>
  </div><!-- contact launcher end -->
</div><!-- border top end -->
<!-- border bottom menu start -->
<div class="border-bottom-menu bottom-position">
  <!-- menu start -->
  <div class="fadeIn-element" id="menu">
    <nav class="menu">
      <ul>
        <li>
          <a href="#home"><p id="time"></p></a>
        </li>
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
  <center> <a href="#"> <span id="footer"></span> </a> </center>
  <marquee scrolldelay="125" width="100%">
    <font color="Yellow";font size="4"><a href="#"> <span id="footer_lines"></span> </a>
    </marquee>
  </div><!-- border bottom end -->
  <!-- main container start -->
  <div id="containerOT">
    <!-- hero bg start -->
    <div class="hero-fullscreen">
      <!-- thumbnail slider start -->
      <div class="hero-bg">
        <!-- thumbnail slider top start -->
        <div class="swiper-container swiper-slider-top-thumbs-vertical">
          <!-- thumbnail slider IMG start -->
          <div class="swiper-wrapper">
            @foreach ( $data1 as $item )
            <div class="swiper-slide overlay cover-all" style="background-image: url('{{ $item->file }}')"></div>
            @endforeach
          </div><!-- thumbnail slider IMG end -->
          <!-- controls start -->
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div><!-- controls end -->
        </div><!-- thumbnail slider top end -->
        <!-- thumbnail slider bottom start -->
        <div class="swiper-container swiper-slider-bottom-thumbs-vertical">
          <!-- thumbnail slider thumbnail IMG start -->
          <div class="swiper-wrapper">
            @foreach ( $data4 as $item )
            <div class="swiper-slide" style="background: linear-gradient(to right, yellow, orange, blue); background: -webkit-linear-gradient(left, yellow , orange, blue); background: -o-linear-gradient(right, yellow, orange, blue); background: -moz-linear-gradient(right, yellow, orange, blue); padding: 5px; border: 1px; -webkit-border-radius: 25px 10px; "> {{ $item->description }} </div>
            @endforeach
          </div><!-- thumbnail slider thumbnail IMG end -->
        </div><!-- thumbnail slider bottom end -->
      </div><!-- thumbnail slider end -->
    </div><!-- hero bg end -->


    <!-- credits panel start -->
    <div class="panel-left-credits panel-left-bg-credits"></div>
    <div class="panel-right-credits">
      <!-- center container start -->
      <div class="center-container">
        <!-- center block start -->
        <div class="center-block">
          <!-- credits content start -->
          <div class="credits-content">
            <div class="credits-content-inner">
              <!-- main txt start -->
              <div class="height-correction">
                <div class="text-title">
                  <h4>
                    A Very Big<br>
                    Thank You!
                  </h4>
                </div>
                <div class="text-txt">
                  <p>
                    Photography supplied courtesy of <a class="link-underline-credits" href="http://curtet.com/" target="_blank">Patrick Curtet</a>.<br>
                    Ken Burns version photography supplied courtesy of <a class="link-underline-credits" href="https://themeforest.net/user/ex-nihilo" target=
                    "_blank">ex-nihilo</a>.<br>
                    <span class="credits-sub">All photos on this website are copyrighted material and all rights are reserved.</span>
                  </p>
                </div>
              </div><!-- main txt end -->
            </div>
          </div><!-- credits content end -->
        </div><!-- center block end -->
      </div><!-- center container end -->
    </div><!-- credits panel end -->

  </div><!-- main container end -->
  <!-- news modal 1 start -->
  <div aria-hidden="true" class="news-modal modal fade" id="newsModal-1" role="dialog" tabindex="-1">
    <!-- news modal content 1 start -->
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div><!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- col start -->
          <div class="col-lg-8 col-lg-offset-2">
            <!-- news modal body 1 start -->
            <div class="modal-body">
              <div class="modal-content-date">
                Tuesday, October 10, 2017
              </div>
              <h2>
                Simplicity is complex
              </h2>
              <p class="item-intro">
                Beauty / Fashion
              </p><!-- news modal body 1 image start -->
              <img alt="News Modal" class="img-responsive" src="img/news/news-1.jpg"> <!-- news modal body 1 image end -->
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod in tellus in mattis. Aliquam erat volutpat. Praesent ultricies aliquet erat a semper. Maecenas
                risus ex, suscipit cursus felis vitae, iaculis tempor dolor. In dignissim accumsan ullamcorper. Aliquam nec augue id mauris <a class="link-underline" href=
                "#">convallis venenatis</a>.
              </p><button class="c-btn fullwidth c-btn-dark c-btn-post" data-dismiss="modal" type="button"><span>Close</span></button>
            </div><!-- news modal body 1 end -->
          </div><!-- col end -->
        </div><!-- row end -->
      </div><!-- container end -->
    </div><!-- news modal content 1 end -->
  </div><!-- news modal 1 end -->
  <!-- news modal 2 start -->
  <div aria-hidden="true" class="news-modal modal fade" id="newsModal-2" role="dialog" tabindex="-1">
    <!-- news modal content 2 start -->
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div><!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- col start -->
          <div class="col-lg-8 col-lg-offset-2">
            <!-- news modal body 2 start -->
            <div class="modal-body">
              <div class="modal-content-date">
                Wednesday, October 11, 2017
              </div>
              <h2>
                Design is a process
              </h2>
              <p class="item-intro">
                People / Life
              </p><!-- news modal body 2 image start -->
              <img alt="News Modal" class="img-responsive" src="img/news/news-2.jpg"> <!-- news modal body 2 image end -->
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod in tellus in mattis. Aliquam erat volutpat. Praesent ultricies aliquet erat a semper. Maecenas
                risus ex, suscipit cursus felis vitae, iaculis tempor dolor. In dignissim accumsan ullamcorper. Aliquam nec augue id mauris <a class="link-underline" href=
                "#">convallis venenatis</a>.
              </p><button class="c-btn fullwidth c-btn-dark c-btn-post" data-dismiss="modal" type="button"><span>Close</span></button>
            </div><!-- news modal body 2 end -->
          </div><!-- col end -->
        </div><!-- row end -->
      </div><!-- container end -->
    </div><!-- news modal content 2 end -->
  </div><!-- news modal 2 end -->
  <!-- news modal 3 start -->
  <div aria-hidden="true" class="news-modal modal fade" id="newsModal-3" role="dialog" tabindex="-1">
    <!-- news modal content 3 start -->
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div><!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- col start -->
          <div class="col-lg-8 col-lg-offset-2">
            <!-- news modal body 3 start -->
            <div class="modal-body">
              <div class="modal-content-date">
                Thursday, October 12, 2017
              </div>
              <h2>
                Aesthetic is a decision
              </h2>
              <p class="item-intro">
                Royalty / Stock
              </p><!-- news modal body 3 video start -->
              <div class="news-modal-video-container">
                <iframe allowfullscreen height="315" src="https://www.youtube.com/embed/r8j-MWq4HZc?rel=0&amp;showinfo=1&amp;autoplay=0" width="560"></iframe>
              </div><!-- news modal body 3 video end -->
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod in tellus in mattis. Aliquam erat volutpat. Praesent ultricies aliquet erat a semper. Maecenas
                risus ex, suscipit cursus felis vitae, iaculis tempor dolor. In dignissim accumsan ullamcorper. Aliquam nec augue id mauris <a class="link-underline" href=
                "#">convallis venenatis</a>.
              </p><button class="c-btn fullwidth c-btn-dark c-btn-post" data-dismiss="modal" type="button"><span>Close</span></button>
            </div><!-- news modal body 3 end -->
          </div><!-- col end -->
        </div><!-- row end -->
      </div><!-- container end -->
    </div><!-- news modal content 3 end -->
  </div><!-- news modal 3 end -->
  <!-- news modal 4 start -->
  <div aria-hidden="true" class="news-modal modal fade" id="newsModal-4" role="dialog" tabindex="-1">
    <!-- news modal content 4 start -->
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div><!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- col start -->
          <div class="col-lg-8 col-lg-offset-2">
            <!-- news modal body 4 start -->
            <div class="modal-body">
              <div class="modal-content-date">
                Friday, October 13, 2017
              </div>
              <h2>
                Style is everything
              </h2>
              <p class="item-intro">
                Culture / Travel
              </p><!-- news modal body 4 image start -->
              <img alt="News Modal" class="img-responsive" src="img/news/news-4.jpg"> <!-- news modal body 4 image end -->
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod in tellus in mattis. Aliquam erat volutpat. Praesent ultricies aliquet erat a semper. Maecenas
                risus ex, suscipit cursus felis vitae, iaculis tempor dolor. In dignissim accumsan ullamcorper. Aliquam nec augue id mauris <a class="link-underline" href=
                "#">convallis venenatis</a>.
              </p><button class="c-btn fullwidth c-btn-dark c-btn-post" data-dismiss="modal" type="button"><span>Close</span></button>
            </div><!-- news modal body 4 end -->
          </div><!-- col end -->
        </div><!-- row end -->
      </div><!-- container end -->
    </div><!-- news modal content 4 end -->
  </div><!-- news modal 4 end -->
  <!-- scripts start -->
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

  // AUTO REFRESH TITLE
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/title.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('title');
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

  // AUTO REFRESH SLIDER IMAGE
  setInterval(
    function() {
      $.get("EXILEDNONAME/resources/views/pages/frontend/autorefresh/slider_image.php", function(Jam) {
        var xJam = Jam;
        var x = document.getElementById('slider_image');
        x.innerHTML = xJam;
      });
    } ,
    1000
  );

  </script>
</body>
</html>
