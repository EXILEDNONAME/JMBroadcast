<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.components.head')
  @stack('css')
</head>
<body>
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
    @include('includes.header')
		@include('includes.sidebar')
		<div id="content" class="content">
			<!-- @include('includes.components.breadcrumb') -->
			<h1 class="page-header"> @yield('page-header') <small> @yield('page-description') </small></h1>
			<div class="panel panel-inverse">
				<div class="panel-heading">
					@include('includes.panel-heading')
          <h4 class="panel-title">
            @php
            $segment = count(Request::segments());
            echo ucwords(str_replace("-", " ", Request::segment($segment)));
            @endphp
          </h4>
				</div>
				<div class="panel-body">
          @include('includes.components.notification')
					@yield('content')
				</div>
			</div>
		</div>
    @include('includes.components.theme-panel')
    @include('includes.components.scroll-top')
	</div>
	@include('includes.components.base-js')
  @stack('js')
  @stack('modal')
</body>
</html>
