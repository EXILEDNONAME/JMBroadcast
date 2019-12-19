@extends('layouts.default')

@push('css')
<script src="/assets/js/demo_pages/uploader_bootstrap.js"></script>
<script src="/assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
<script src="/assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
<script src="/assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
@endpush

@section('content')
<!-- Form inputs -->
<div class="card">
  <div class="card-header bg-dark text-white header-elements-inline">
    <h5 class="card-title">Column selectors</h5>
    <div class="header-elements">
      <div class="list-icons">
        <a class="list-icons-item" data-action="collapse"></a>
        <a class="list-icons-item" data-action="reload"></a>
        <a class="list-icons-item" data-action="remove"></a>
      </div>
    </div>
  </div>

  <div class="card-body">

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong> {{ $message }} </strong>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong> {{ $message }} </strong>
    </div>
    @endif

    @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
      <div class="row">
        - {{ $error }}
      </div>
      @endforeach
    </ul>
    @endif

    <form action="/dashboard/contents/upload/process" method="POST" enctype="multipart/form-data">
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
      <tr class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <td width="24%" class="text-nowrap align-middle"> Type </td>
        <td width="1%" class="text-nowrap align-middle"> : </td>
        <td width="75%">
          <select class="form-control" name="type" required>
            <option value=""> - Select Type - </option>
            <option value="1"> Video </option>
            <option value="2"> Image </option>
          </select>
        </td>
      </tr>
      <tr class="form-group {{ $errors->has('order') ? 'has-error' : ''}}">
        <td width="24%" class="text-nowrap align-middle"> Order </td>
        <td width="1%" class="text-nowrap align-middle"> : </td>
        <td width="75%">
          <input type="number" class="form-control" name="sort" value="{{ GetCountContent() }}">
        </td>
      </tr>
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
  </div>
</div>
<!-- /form inputs -->
@endsection
