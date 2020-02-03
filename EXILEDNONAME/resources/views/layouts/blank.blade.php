<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title> Dashboard </title>
  @include('includes.head')
</head>
<body>
  @include('includes.component.page-loader')
  <div id="page-container" class="fade page-header-fixed page-sidebar-fixed page-with-light-sidebar page-with-two-sidebar show page-right-sidebar-collapsed">
    @include('includes.header')
    @include('includes.sidebar-left')
    @include('includes.sidebar-right')

    @yield('content')

    @include('includes.component.theme-panel')
    @include('includes.component.scroll-top')
  </div>

  @include('includes.js')
</body>
</html>
