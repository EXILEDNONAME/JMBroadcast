@extends('layouts.default')

@section('panel-button')
<a href="{{ route('accesses.index') }}">
  <button class="btn btn-inverse" title="Back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button>
</a>
@endsection

@section('panel-title','PANEL TITLE')
@section('panel-body')

@if ($errors->any())
<ul class="alert alert-danger">
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<form method="POST" action="{{ route('accesses.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}
  @include ('pages.backend.setting.management.access.form', ['formMode' => 'create'])
</form>

@endsection
