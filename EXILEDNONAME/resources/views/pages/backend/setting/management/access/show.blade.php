@extends('layouts.default')

@section('panel-button')
<a href="{{ route('accesses.index') }}" title="Back">
  <button class="btn btn-inverse"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button>
</a>
@endsection

@section('panel-title','PANEL TITLE')
@section('panel-body')

<table width="100%" class="table">
  <tr>
    <td><label for="name" class="control-label"> Name </label></td>
    <td> {{ $data->name }} </td>
  </tr>
  <tr>
    <td> <label for="description" class="control-label"> Description </label> </td>
    <td> {{ $data->description }} </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>
@endsection
