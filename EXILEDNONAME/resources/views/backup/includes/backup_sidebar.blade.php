<div id="sidebar" class="sidebar">
  <!-- begin sidebar scrollbar -->
  <div data-scrollbar="true" data-height="100%">
    <!-- begin sidebar user -->
    <ul class="nav">
      <li class="nav-profile">
        <a href="javascript:;" data-toggle="nav-profile">
          <div class="cover with-shadow"></div>
          <div class="image">
            <img src="/assets/img/user/user-13.jpg" alt="" />
          </div>
          <div class="info">
            <b class="caret pull-right"></b>
            {{ UsersGetName() }}
            <small> {{ AccessesGetName() }} </small>
          </div>
        </a>
      </li>
      <li>
        <ul class="nav nav-profile">
          <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
          <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
          <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
        </ul>
      </li>
    </ul>
    <!-- end sidebar user -->
    <!-- begin sidebar nav -->
    <ul class="nav">
      <li class="nav-header"> Main </li>

      <!-- MENU 1 -->
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-th-large"></i>
          <span>Dashboard</span>
        </a>
        <ul class="sub-menu">
          <li><a href="index.html">Dashboard v1</a></li>
          <li><a href="index_v2.html">Dashboard v2</a></li>
        </ul>
      </li>
      <!-- MENU 1 -->

      <!-- MENU 2 -->
      <?php $menu = DB::table('menus')->where('parent', 0)->get(); ?>
      @foreach ($menu as $menus)
        <?php $submenu = DB::table('menus')->where('parent', $menus->id)->get(); ?>
        @if ( count($submenu) != 0 )
        <li class="has-sub">
          <a href="javascript:;">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>{{ $menus->name }}</span>
          </a>
        <ul class="sub-menu">
          @foreach ($submenu as $submenus)
          <li><a href="#"> {{ $submenus->name }}</a></li>
          @endforeach
        </ul>
      </li>
      @else <li><a href="#"><i class="fa fa-th-large"></i> {{ $menus->name }} </a></li>
      @endif

      @endforeach
      <!-- MENU 2 -->
    </ul>

    <ul class="nav">
      <li class="nav-header"> Database </li>
      <li><a href="#"> <i class="fa fa-th-large"></i> File Manager </a></li>
    </ul>

    <ul class="nav">
      <li class="nav-header"> Settings </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-user"></i>
          <span> Accounts </span>
        </a>
        <ul class="sub-menu">
          <li><a href="javascript:;"> General </a></li>
          <li><a href="javascript:;"> Manage Profiles </a></li>
          <li><a href="javascript:;"> Manage Password </a></li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-align-left"></i>
          <span> Control Panel </span>
        </a>
        <ul class="sub-menu">
          <li><a href="javascript:;"> General </a></li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Menus
            </a>
            <ul class="sub-menu">
              <li><a href="javascript:;"> All Menus </a></li>
              <li><a href="javascript:;"> Create New Menu </a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              Users
            </a>
            <ul class="sub-menu">
              <li><a href="javascript:;"> All Users </a></li>
              <li><a href="javascript:;"> Create New User </a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="javascript:;"><i class="fas fa-sign-out-alt"></i> Sign Out </a></li>
      <!-- begin sidebar minify button -->
      <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
      <!-- end sidebar minify button -->
    </ul>
    <!-- end sidebar nav -->
  </div>
  <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
