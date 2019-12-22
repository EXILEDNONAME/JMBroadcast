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
			@include('includes.components.breadcrumb')
			<h1 class="page-header"> @yield('page-header') <small> @yield('page-description') </small></h1>
				<div class="row">
          @include('includes.components.notification')
					@yield('content')
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
