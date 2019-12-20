@extends('layouts.exilednoname')
@push('css')
<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('page-header', 'PAGE HEADER')
@section('page-description', 'PAGE DESCRIPTION')

@section('content')
<form action="/dashboard/galleries/uploads/images/process" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
<table width="100%" class="table table-condensed">
  <tr class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> File </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="file" class="form-control" name="file" required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Name / Title </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="text" class="form-control" name="name" required>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Description </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <textarea class="form-control" name="description"></textarea>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('order') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Order </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <input type="number" class="form-control" name="sort" value="{{ GetCountImage() }}">
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Active </td>
    <td width="1%" class="text-nowrap align-middle"> : </td>
    <td width="75%">
      <select class="form-control" name="active">
        <option value="0"> {{ SelectActiveNo() }} </option>
        <option value="1"> {{ SelectActiveYes() }} </option>
      </select>
    </td>
  </tr>
  <tr>
    <td width="24%" class="text-nowrap align-middle"> </td>
    <td width="1%" class="text-nowrap align-middle"> </td>
    <td width="75%" class="text-nowrap align-middle">
      <input class="btn btn-primary" type="submit" value="Upload">
      <a href="/dashboard/galleries"><button type="cancel" class="btn btn-danger"> Cancel </button></a>
    </td>
  </tr>
</table>
</form>
@endsection
