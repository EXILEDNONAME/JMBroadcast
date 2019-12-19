<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> EXILEDNONAME :: Dashboard </title>

	<!-- GLOBAL CSS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- // GLOBAL CSS -->

	<!-- GLOBAL JS -->
	<script src="/assets/js/main/jquery.min.js"></script>
	<script src="/assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/plugins/ui/perfect_scrollbar.min.js"></script>
	<script src="/assets/js/app.js"></script>
	<script src="/assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="/assets/js/demo_pages/layout_fixed_sidebar_custom.js"></script>


	<!-- // GLOBAL JS -->

	@stack('css')
	<!-- <script src="/assets/js/demo_pages/dashboard.js"></script> -->
</head>

<body class="navbar-top">
	@include('includes.header')
	<div class="page-content">
		@include('includes.sidebar')
		<div class="content-wrapper">
			<div class="page-header page-header-light">
				@include('includes.breadcrumb')
			</div>

			<div class="content">
				@yield('content')
				@include('includes.footer')
			</div>
			<br><br>
		</div>

		@stack('modal')
	</body>
	</html>
