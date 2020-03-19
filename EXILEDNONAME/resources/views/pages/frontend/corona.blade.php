
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta http-equiv="refresh" content="
	@if ( $setup->time_slide_2 == 0 ) 15
	@else {{ $setup->time_slide_2 }}
	@endif ; URL='/'" />
	<title> {{ $setup->title }} </title>
  <link rel='stylesheet' id='supersized_CSS-css'  href='/themes/frontend/main/2/supersized.css' type='text/css' media='screen' />
  <link rel='stylesheet' id='MainStyle-css'  href='/themes/frontend/main/2/style.css' type='text/css' media='all' />
  <link rel='stylesheet' id='ResponsiveCSS-css'  href='/themes/frontend/main/2/responsive.css' type='text/css' media='screen' />
  <script type='text/javascript' src='/themes/frontend/main/2/jquery.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/jquery-migrate.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/pace.js'></script>
</head>
<body class="home theme-kinetika theme-is-dark demo page-is-fullscreen fullscreen-slideshow theme-fullwidth footer-is-on">
  <div class="preloader-cover-screen"></div>
  <div class="wpml-lang-selector-wrap"></div>
  <div id="home" class="container-wrapper container-fullwidth">
    <div id="progress-back" class="load-item">
      <div id="progress-bar"></div>
    </div>
    <div class="contentclearfix clearfix"></div>
  </div>
  <footer>
    <div class="fullscreen-footer-wrap">
      <marquee scrollamount="1" scrolldelay="1" width="100%">
  			<font font size="4"> {{ $setup->footer }} </font>
  		</marquee>
    </div>
  </footer>

  <script type='text/javascript' src='/themes/frontend/main/2/jquery-nicescroll.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/jquery-fitvids.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/widget.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/tooltip.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/stickysidebar.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/common.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/supersized.js'></script>
  <script type='text/javascript' src='/themes/frontend/main/2/supersized-shutter.js'></script>
  <script type="text/javascript">
  /* <![CDATA[ */
  jQuery(function($){
    jQuery.supersized({
      slideshow               : 1,
      autoplay				        :	1,
      start_slide             : 1,
      image_path				      :	'https://imaginem.io/kinetika/wp-content/themes/kinetika/images/supersized/',
      stop_loop				        :	0,
      random					        : 0,
      slide_interval          : 8000,
      transition              : 1,
      transition_speed		    :	1000,
      new_window				      :	0,
      pause_hover             : 0,
      keyboard_nav            : 1,
      performance				      :	2,
      image_protect			      :	0,
      min_width		            : 0,
      min_height		          : 0,
      vertical_center         : 1,
      horizontal_center       : 1,
      fit_always				      :	0,
      fit_portrait         	  : 1,
      fit_landscape			      : 0,
      slide_links				      :	'blank',
      thumb_links				      :	1,
      thumbnail_navigation    : 0,
      slides 					        : [
        @foreach ( $slide2 as $item )
        {
          image : 'EXILEDNONAME/files/{{ $item->file }}'
        },
        @endforeach
      ],
      progress_bar			:	1,
      mouse_scrub				:	1
    });
    if ($.fn.swipe) {
      jQuery(".page-is-fullscreen #supersized,.pattern-overlay").swipe({
        excludedElements: "button, input, select, textarea, .noSwipe",
        swipeLeft: function() {
          jQuery("#nextslide").trigger("click");
        },
        swipeRight: function() {
          jQuery("#prevslide").trigger("click");
        }
      });
    }
  });
  /* ]]> */
</script>
</body>
</html>
