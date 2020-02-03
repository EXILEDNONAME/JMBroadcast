@extends('layouts.blank')

@section('content')
<div id="content" class="content">
  <div class="row">

    <!-- GET COUNT SLIDE 1 -->
    <div class="col-lg-3 col-md-6">
      <div class="widget widget-stats bg-gradient-green">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
        <div class="stats-content">
          <div class="stats-title"> Total Contents </div>
          <div class="stats-number"> {{ broadcast_contents_get_countnormal() }} / 10 </div>
          @php $perc_content = (broadcast_contents_get_countnormal() / 10)*100; @endphp
          <div class="stats-progress progress">
            <div class="progress-bar" style="width: {{ $perc_content }}%;"></div>
          </div>
          <div class="stats-desc"> Storage: {{ $perc_content }}%</div>
        </div>
      </div>
    </div>

    <!-- GET COUNT SLIDE 1 -->
    <div class="col-lg-3 col-md-6">
      <div class="widget widget-stats bg-gradient-green">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
        <div class="stats-content">
          <div class="stats-title"> Total Image Slide 1 </div>
          <div class="stats-number"> {{ broadcast_slide1s_get_countnormal() }} / 5 </div>
          @php $perc_slide1 = (broadcast_slide1s_get_countnormal() / 5)*100; @endphp
          <div class="stats-progress progress">
            <div class="progress-bar" style="width: {{ $perc_slide1 }}%;"></div>
          </div>
          <div class="stats-desc"> Storage: {{ $perc_slide1 }}%</div>
        </div>
      </div>
    </div>

    <!-- GET COUNT SLIDE 2 -->
    <div class="col-lg-3 col-md-6">
      <div class="widget widget-stats bg-gradient-blue">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
        <div class="stats-content">
          <div class="stats-title"> Total Image Slide 2 </div>
          <div class="stats-number">{{ broadcast_slide2s_get_countnormal() }} / 50 </div>
          @php $perc_slide2 = (broadcast_slide2s_get_countnormal() / 50)*100; @endphp
          <div class="stats-progress progress">
            <div class="progress-bar" style="width: {{ $perc_slide2 }}%;"></div>
          </div>
          <div class="stats-desc"> Storage: {{ $perc_slide2 }}% </div>
        </div>
      </div>
    </div>

    <!-- GET COUNT VIDEO 1 -->
    <div class="col-lg-3 col-md-6">
      <div class="widget widget-stats bg-gradient-purple">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-archive-sign fa-fw"></i></div>
        <div class="stats-content">
          <div class="stats-title"> Total Video Slide 1 </div>
          <div class="stats-number">{{ broadcast_video1s_get_countnormal() }} / 1 </div>
          @php $perc_video1 = (broadcast_video1s_get_countnormal() / 1)*100; @endphp
          <div class="stats-progress progress">
            <div class="progress-bar" style="width: {{ $perc_video1 }}%;"></div>
          </div>
          <div class="stats-desc"> Storage: {{ $perc_video1 }}% </div>
        </div>
      </div>
    </div>

    <!-- GET COUNT VIDEO 2 -->
    <div class="col-lg-3 col-md-6">
      <div class="widget widget-stats bg-gradient-purple">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-archive-sign fa-fw"></i></div>
        <div class="stats-content">
          <div class="stats-title"> Total Video Slide 2 </div>
          <div class="stats-number">{{ broadcast_video2s_get_countnormal() }} / 1 </div>
          @php $perc_video2 = (broadcast_video2s_get_countnormal() / 1)*100; @endphp
          <div class="stats-progress progress">
            <div class="progress-bar" style="width: {{ $perc_video2 }}%;"></div>
          </div>
          <div class="stats-desc"> Storage: {{ $perc_video2 }}% </div>
        </div>
      </div>
    </div>

    <!-- GET COUNT VIDEO 3 -->
    <div class="col-lg-3 col-md-6">
      <div class="widget widget-stats bg-gradient-purple">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-archive-sign fa-fw"></i></div>
        <div class="stats-content">
          <div class="stats-title"> Total Video Slide 3 </div>
          <div class="stats-number">{{ broadcast_video3s_get_countnormal() }} / 1 </div>
          @php $perc_video3 = (broadcast_video3s_get_countnormal() / 1)*100; @endphp
          <div class="stats-progress progress">
            <div class="progress-bar" style="width: {{ $perc_video3 }}%;"></div>
          </div>
          <div class="stats-desc"> Storage: {{ $perc_video3 }}% </div>
        </div>
      </div>
    </div>

    <!-- GET COUNT VIDEO 4 -->
    <div class="col-lg-3 col-md-6">
      <div class="widget widget-stats bg-gradient-purple">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-archive-sign fa-fw"></i></div>
        <div class="stats-content">
          <div class="stats-title"> Total Video Slide 4 </div>
          <div class="stats-number">{{ broadcast_video4s_get_countnormal() }} / 1 </div>
          @php $perc_video4 = (broadcast_video4s_get_countnormal() / 1)*100; @endphp
          <div class="stats-progress progress">
            <div class="progress-bar" style="width: {{ $perc_video4 }}%;"></div>
          </div>
          <div class="stats-desc"> Storage: {{ $perc_video4 }}% </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
