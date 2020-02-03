<div id="header" class="header navbar-default">
  <!-- begin navbar-header -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle pull-left" data-click="sidebar-toggled">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <button type="button" class="navbar-toggle pull-right" data-click="right-sidebar-toggled">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="/dashboard" class="navbar-brand"><img class="vertical-logoimage" src="/img/jasamarga-logo.png" alt="logo" width="20%" /> <b> JASAMARGA </b></img></a>
  </div>
  <!-- end navbar-header -->

  <!-- begin header-nav -->
  <ul class="navbar-nav navbar-right">
    <li>
      <form class="navbar-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter keyword" />
          <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </li>
    <li class="dropdown">
      <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
        <i class="fa fa-bell"></i>
        <span class="label">0</span>
      </a>
    </li>
    <li class="dropdown navbar-user">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
        <img src="/themes/backend/img/user/user-13.jpg" alt="" />
        <span class="d-none d-md-inline"> {{ Auth::user()->name }} </span> <b class="caret"></b>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="javascript:void(0)" onclick="location.href='/dashboard/logout'" class="dropdown-item"> Logout </a>
      </div>
    </li>
    <li class="divider d-none d-md-block"></li>
    <li class="d-none d-md-block">
      <!-- DISABLED -->
      <!-- <a href="javascript:;" data-click="right-sidebar-toggled" class="f-s-14"> -->
      <a href="#" class="f-s-14">
        <i class="fa fa-th"></i>
      </a>
    </li>
  </ul>
  <!-- end header navigation right -->
</div>
