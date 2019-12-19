<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
  <div class="d-flex">
    <div class="breadcrumb">
        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i></a>
        @for($i = 2; $i <= count(Request::segments()); $i++)
          <span class="breadcrumb-item active" href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
            {{ ucwords(str_replace("-", " ", Request::segment($i))) }}
          </span>
        @endfor
      </ol>
    </div>

    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
  </div>

  <div class="header-elements d-none">
    <div class="breadcrumb justify-content-center">
      <a href="#" class="breadcrumb-elements-item">
        <i class="icon-comment-discussion mr-2"></i>
        Support
      </a>

      <div class="breadcrumb-elements-item dropdown p-0">
        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
          <i class="icon-gear mr-2"></i>
          Settings
        </a>

        <div class="dropdown-menu dropdown-menu-right">
          <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account Security</a>
          <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
          <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
        </div>
      </div>
    </div>
  </div>
</div>
