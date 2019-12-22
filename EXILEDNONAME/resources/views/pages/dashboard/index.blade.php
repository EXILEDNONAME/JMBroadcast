@extends('layouts.blank')
@section('page-header', 'Dashboard')
@section('page-description', '// Show Data on Database ...')

@section('content')
<!-- begin col-3 -->
<div class="col-lg-3 col-md-6">
  <div class="widget widget-stats bg-gradient-green">
    <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
    <div class="stats-content">
      <div class="stats-title"> Gallery Images </div>
      <div class="stats-number"> {{ count($data1) }} Items </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6">
  <div class="widget widget-stats bg-gradient-blue">
    <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
    <div class="stats-content">
      <div class="stats-title"> Gallery Videos </div>
      <div class="stats-number">{{ count($data2) }} Items</div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6">
  <div class="widget widget-stats bg-gradient-purple">
    <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
    <div class="stats-content">
      <div class="stats-title"> Contents </div>
      <div class="stats-number">{{ count($data4) }} Items</div>
    </div>
  </div>
</div>
<!-- end col-3 -->
<!-- begin col-3 -->
<div class="col-lg-3 col-md-6">
  <div class="widget widget-stats bg-gradient-black">
    <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
    <div class="stats-content">
      <div class="stats-title"> Total User </div>
      <div class="stats-number"> {{ count($data5) }} Users </div>
    </div>
  </div>
</div>
<!-- end col-3 -->
@endsection
