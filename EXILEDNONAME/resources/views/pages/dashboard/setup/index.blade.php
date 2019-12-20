@extends('layouts.exilednoname')
@push('css')
<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('page-header', 'PAGE HEADER')
@section('page-description', 'PAGE DESCRIPTION')

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
  <!-- <tr class="form-group {{ $errors->has('content_left') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Content left </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="content_left" value="{{ $item->content_left }}"required>
    </td>
  </tr> -->
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
      <textarea class="form-control" name="footer" required> {{ $item->footer }}</textarea>
    </td>
  </tr>

  <!-- <tr class="form-group {{ $errors->has('header_left_social') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Header Left Social </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="header_left_social" required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('header_right_custom') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Header Right Custom </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="header_right_custom" required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('headline') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Headline </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="headline" required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('footer') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Footer </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="footer" required>
    </td>
  </tr> -->
  <!-- <tr class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Type </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <select class="form-control" name="type" required>
        <option value=""> - Select Type - </option>
        <option value="1"> Video </option>
        <option value="2"> Image </option>
      </select>
    </td>
  </tr> -->
  <tr class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Active </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <select class="form-control" name="active">
        <option value="1"> {{ SelectActiveYes() }} </option>
        <option value="0"> {{ SelectActiveNo() }} </option>
      </select>
    </td>
  </tr>
  <tr>
    <td width="24%" class="text-nowrap align-middle"> </td>
    <td width="1%" class="text-nowrap align-middle"> </td>
    <td width="75%" class="text-nowrap align-middle">
      <input class="btn btn-primary" type="submit" value="Upload">
      <a href="/dashboard/contents"><button type="cancel" class="btn btn-danger"> Cancel </button></a>
    </td>
  </tr>
</table>
</form>
@endforeach
@endsection
