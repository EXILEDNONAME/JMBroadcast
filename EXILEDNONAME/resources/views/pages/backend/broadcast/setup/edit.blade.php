@extends('layouts.default')

@section('panel-button')
<a href="{{ route('video-4.index') }}">
  <button class="btn btn-inverse" title="Back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button>
</a>
@endsection

@section('panel-title','Video 4 - Edit')
@section('panel-body')

@if ($errors->any())
<ul class="alert alert-danger">
  @foreach ($errors->all() as $error)
  - {{ $error }} <br>
  @endforeach
</ul>
@endif

<form method="POST" action="{{ route('video-4.index') }}/{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}

  @include ('pages.backend.broadcast.video-4.form', ['formMode' => 'edit'])
</form>
@endsection
