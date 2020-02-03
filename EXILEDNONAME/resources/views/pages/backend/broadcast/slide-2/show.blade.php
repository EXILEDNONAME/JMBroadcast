@extends('layouts.default')

@section('panel-button')
<a href="{{ route('slide-2.index') }}" title="Back">
  <button class="btn btn-inverse"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button>
</a>
@endsection

@section('panel-title','Detailed')
@section('panel-body')

<table width="100%" class="table">
  <tr>
    <td style="vertical-align: middle"> Name </td>
    <td style="vertical-align: middle"> {{ $data->name }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Description </td>
    <td style="vertical-align: middle"> {{ $data->description }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> File </td>
    <td style="vertical-align: middle"> {{ $data->file }} </td>
  </tr>
  @include('includes.table-controller.show')
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>
@endsection
