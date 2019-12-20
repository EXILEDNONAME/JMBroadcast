@extends('layouts.exilednoname')
@push('css')
<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('page-header', 'PAGE HEADER')
@section('page-description', 'PAGE DESCRIPTION')

@section('content')

    @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
      <div class="row">
        - {{ $error }}
      </div>
      @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ url('/dashboard/contents') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include ('pages.dashboard.content.form', ['formMode' => 'create'])
    </form>

@endsection
