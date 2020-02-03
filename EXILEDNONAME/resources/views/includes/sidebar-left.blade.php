<div id="sidebar" class="sidebar">
  <div data-scrollbar="true" data-height="100%">
    <ul class="nav">
      <li class="nav-profile">
        <a href="javascript:void(0)" data-toggle="nav-profile">
          <div class="cover with-shadow"></div>
          <div class="info">
            <b class="caret pull-right"></b>
            {{ Auth::user()->name }}
            <small>Administrator</small>
          </div>
        </a>
      </li>
      <li>
        <ul class="nav nav-profile">
          <li><a href="javascript:void(0)"><i class="fa fa-cog"></i> Settings</a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-question-circle"></i> Helps</a></li>
        </ul>
      </li>
    </ul>

    <ul class="nav">
      <li class="nav-header">Navigation</li>
      <li class="has-sub">
        <a href="/dashboard">
          <i class="fa fa-th-large"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="has-sub {{ (request()->is('dashboard/broadcast*')) ? 'active' : '' }}">
        <a href="javascript:void(0)">
          <b class="caret"></b>
          <i class="fa fa-th-large"></i>
          <span> Broadcast </span>
        </a>
        <ul class="sub-menu">
          <li class="has-sub"><a href="/dashboard/broadcast/setups"> General Setups </a></li>
          <li class="has-sub {{ (request()->is('dashboard/broadcast/contents*')) ? 'active' : '' }}">
            <a href="javascript:void(0)">
              <b class="caret"></b>
              <span> Contents </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/broadcast/contents')) ? 'active' : '' }}"><a href="/dashboard/broadcast/contents"> Main </a></li>
              <li class="{{ (request()->is('dashboard/broadcast/contents/create')) ? 'active' : '' }}"><a href="/dashboard/broadcast/contents/create"> Create New Content </a></li>
            </ul>
          </li>
          <li class="has-sub {{ (request()->is('dashboard/broadcast/slide-1*')) ? 'active' : '' }}">
            <a href="javascript:void(0)">
              <b class="caret"></b>
              <span> Slide 1 </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/broadcast/slide-1')) ? 'active' : '' }}"><a href="/dashboard/broadcast/slide-1"> Main </a></li>
              <li class="{{ (request()->is('dashboard/broadcast/slide-1/create')) ? 'active' : '' }}"><a href="/dashboard/broadcast/slide-1/create"> Create New Slide </a></li>
            </ul>
          </li>
          <li class="has-sub {{ (request()->is('dashboard/broadcast/slide-2*')) ? 'active' : '' }}">
            <a href="javascript:void(0)">
              <b class="caret"></b>
              <span> Slide 2 </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/broadcast/slide-2')) ? 'active' : '' }}"><a href="/dashboard/broadcast/slide-2"> Main </a></li>
              <li class="{{ (request()->is('dashboard/broadcast/slide-2/create')) ? 'active' : '' }}"><a href="/dashboard/broadcast/slide-2/create"> Create New Slide </a></li>
            </ul>
          </li>
          <li class="has-sub {{ (request()->is('dashboard/broadcast/video-1*')) ? 'active' : '' }}">
            <a href="javascript:void(0)">
              <b class="caret"></b>
              <span> Video 1 </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/broadcast/video-1')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-1"> Main </a></li>
              <li class="{{ (request()->is('dashboard/broadcast/video-1/create')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-1/create"> Create New Video </a></li>
            </ul>
          </li>
          <li class="has-sub {{ (request()->is('dashboard/broadcast/video-2*')) ? 'active' : '' }}">
            <a href="javascript:void(0)">
              <b class="caret"></b>
              <span> Video 2 </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/broadcast/video-2')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-2"> Main </a></li>
              <li class="{{ (request()->is('dashboard/broadcast/video-2/create')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-2/create"> Create New Video </a></li>
            </ul>
          </li>
          <li class="has-sub {{ (request()->is('dashboard/broadcast/video-3*')) ? 'active' : '' }}">
            <a href="javascript:void(0)">
              <b class="caret"></b>
              <span> Video 3 </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/broadcast/video-3')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-3"> Main </a></li>
              <li class="{{ (request()->is('dashboard/broadcast/video-3/create')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-3/create"> Create New Video </a></li>
            </ul>
          </li>
          <li class="has-sub {{ (request()->is('dashboard/broadcast/video-4*')) ? 'active' : '' }}">
            <a href="javascript:void(0)">
              <b class="caret"></b>
              <span> Video 4 </span>
            </a>
            <ul class="sub-menu">
              <li class="{{ (request()->is('dashboard/broadcast/video-4')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-4"> Main </a></li>
              <li class="{{ (request()->is('dashboard/broadcast/video-4/create')) ? 'active' : '' }}"><a href="/dashboard/broadcast/video-4/create"> Create New Video </a></li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- SETTINGS -->
      <li class="nav-header"> Settings </li>
      <li>
        <a href="javascript:void(0)" onclick="location.href='/dashboard/logout'">
        <i class="fas fa-sign-out-alt"></i>
        <span> Logout </span></a>
      </li>

      <li><a href="javascript:void(0)" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
    </ul>
  </div>
</div>
<div class="sidebar-bg"></div>
