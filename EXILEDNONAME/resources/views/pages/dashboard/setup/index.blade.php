@extends('layouts.exilednoname')
@push('css')
<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('page-header', 'General Setups')
@section('page-description', '// ...')

@section('content')
@foreach ( $data as $item )
<form action="/dashboard/setups/process" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
<table width="100%" class="table table-condensed">
  <tr class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Title </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="title" value="{{ $item->title }}" required>

    </td>
  </tr>
  <tr class="form-group {{ $errors->has('page_title') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Page Title </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="page_title" value="{{ $item->page_title }}"required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('header_left') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Header Left </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="header_left" value="{{ $item->header_left }}"required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('header_right') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Header Right </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="header_right" value="{{ $item->header_right }}"required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('content_right') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Content Right </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="content_right" value="{{ $item->content_right }}"required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('footer') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Footer </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="footer" value="{{ $item->footer }}"required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('footer_lines') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Footer Lines </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <textarea class="form-control" name="footer_lines" required> {{ $item->footer_lines }}</textarea>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('timer_slider_image') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Set Timer Slide Image /s </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <textarea class="form-control" name="timer_slider_image" required> {{ $item->timer_slider_image }}</textarea>
    </td>
  </tr>
  <tr>
  <tr class="form-group {{ $errors->has('header_social') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Header Social </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <textarea class="form-control" name="header_social" required> {{ $item->header_social }}</textarea>
    </td>
  </tr>
  <tr>
    <td width="24%" class="text-nowrap align-middle"> </td>
    <td width="1%" class="text-nowrap align-middle"> </td>
    <td width="75%" class="text-nowrap align-middle">
      <input class="btn btn-primary" type="submit" value="Update">
      <a href="/dashboard/setups"><button type="cancel" class="btn btn-danger"> Cancel </button></a>
    </td>
  </tr>
</table>
</form>
@endforeach
@endsection
