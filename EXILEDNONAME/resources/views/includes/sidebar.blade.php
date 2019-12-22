<div id="sidebar" class="sidebar">
  <!-- begin sidebar scrollbar -->
  <div data-scrollbar="true" data-height="100%">
    <!-- begin sidebar user -->
    <ul class="nav">
      <li class="nav-profile">
        <a href="javascript:;" data-toggle="nav-profile">
          <div class="cover with-shadow"></div>
          <div class="info">
            <b class="caret pull-right"></b>
            {{ UsersGetName() }}
            <small>{{ AccessesGetName() }}</small>
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
      <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-th-large"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- CONTENTS -->
      <li class="has-sub {{ (request()->is('dashboard/galleries*')) ? 'active' : '' }}">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-table"></i>
          <span> Galleries </span>
        </a>
        <ul class="sub-menu">
          <li class="{{ (request()->is('dashboard/galleries')) ? 'active' : '' }}"><a href="/dashboard/galleries"> All Galleries </a></li>
          <li class="has-sub {{ (request()->is('dashboard/galleries/uploads*')) ? 'active' : '' }}">
            <a href="javascript:;">
              <b class="caret"></b>
              <span> File Uploads </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/galleries/uploads/images')) ? 'active' : '' }}"><a href="/dashboard/galleries/uploads/images"> Images </a></li>
              <li class="{{ (request()->is('dashboard/galleries/uploads/videos')) ? 'active' : '' }}"><a href="/dashboard/galleries/uploads/videos"> Videos </a></li>
            </ul>
          </li>
        </ul>
      </li>
      <!-- // CONTENTS -->

      <!-- SET-UP -->
      <li class="has-sub {{ (request()->is('dashboard/contents*')) ? 'active' : '' }}">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="fa fa-table"></i>
          <span> Contents </span>
        </a>
        <ul class="sub-menu">
          <li class="{{ (request()->is('dashboard/contents')) ? 'active' : '' }}"><a href="/dashboard/contents"> All Contents </a></li>
          <li class="{{ (request()->is('dashboard/contents/create')) ? 'active' : '' }}"><a href="/dashboard/contents/create"> Create New Content </a></li>
        </ul>
      </li>
      <!-- // CONTENTS -->

      <!-- SET-UP -->
      <li class="{{ (request()->is('dashboard/setups*')) ? 'active' : '' }}">
        <a href="/dashboard/setups">
          <i class="fa fa-table"></i>
          <span> Setups </span>
        </a>
      </li>
      <!-- // SETUPS -->

      <ul class="nav">
        <li class="nav-header"> System </li>
        <li class="has-sub">
          <a href="javascript:;">
            <b class="caret"></b>
            <i class="fa fa-table"></i>
            <span> File Manager </span>
          </a>
          <ul class="sub-menu">
            <li><a href="#"> Image </a></li>
            <li><a href="#"> Video </a></li>
          </ul>
        </li>
        <li class="has-sub">
          <a href="javascript:;">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span> Access Managements </span>
          </a>
          <ul class="sub-menu">
            <li><a href="#"> Roles </a></li>
            <li><a href="#"> Users </a></li>
          </ul>
        </li>
        <li class="has-sub">
          <a href="javascript:;">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span> Settings </span>
          </a>
          <ul class="sub-menu">
            <li><a href="#"> Profile </a></li>
            <li><a href="/dashboard/signout"> Sign Out </a></li>
          </ul>
        </li>
      </ul>



      <!-- begin sidebar minify button -->
      <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
      <!-- end sidebar minify button -->
    </ul>
    <!-- end sidebar nav -->
  </div>
  <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
