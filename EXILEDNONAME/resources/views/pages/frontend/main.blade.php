
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
	<meta http-equiv="refresh" content="
	@if ( $data3->timer_slider_image == 0 ) 1
	@else {{ $data3->timer_slider_image }}
	@endif ; URL='/video-1'" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link rel="shortcut icon" href="/assets/img/jasamarga-ico.png" width="15px" height="15px">
	<link href="http://www.11-76.com/themes/the-one-responsive/css/plugins.css" media="all" rel="stylesheet" type="text/css">
	<link href="http://www.11-76.com/themes/the-one-responsive/css/style.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
	<script type="text/javascript" src="/assets/js/frontend/jquery-1.4.2.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7COswald:300,400,700" rel="stylesheet" type="text/css"><!-- google fonts end -->
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

	<div class="border-bottom-menu bottom-position">
		<div class="fadeIn-element" id="menu">
			<nav class="menu">
				<ul><li><a href="#home"><span id="datetime"></span></a></li></ul>
			</nav>
		</div>
		<div class="credits fadeIn-element">
			<a class="toggle-credits-content"><span id="content_right"></span></a>
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

				<div class="swiper-container swiper-slider-bottom-thumbs-vertical">
					<div class="swiper-wrapper">
						@foreach ( $data1 as $item )
						<div class="swiper-slide" style="background-image: url('EXILEDNONAME/files/{{ $item->file }}')"></div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
	<script src="http://www.11-76.com/themes/the-one-responsive/js/plugins.js" type="text/javascript"></script>
	<script src="http://www.11-76.com/themes/the-one-responsive/js/the-one.js" type="text/javascript"></script><!-- scripts end -->

	<script>
	// AUTO REFRESH FOOTER LINES
	setInterval(
		function() {
			$.get("/data/datetime.php", function(Jam) {
				var xJam = Jam;
				var x = document.getElementById('datetime');
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
	</script>
</body>
</html>
