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
    <td style="vertical-align: middle"> ID User </td>
    <td style="vertical-align: middle"> {{ $data->users->name }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Sort </td>
    <td style="vertical-align: middle"> {{ $data->sort }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Status </td>
    <td style="vertical-align: middle"> {{ $data->status }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Created At </td>
    <td style="vertical-align: middle"> {{ $data->created_at }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Updated At </td>
    <td style="vertical-align: middle"> {{ $data->updated_at }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Created By </td>
    <td style="vertical-align: middle"> {{ $data->created_by }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Updated By </td>
    <td style="vertical-align: middle"> {{ $data->updated_by }} </td>
  </tr>
  <tr>
    <td style="vertical-align: middle"> Active </td>
    <td style="vertical-align: middle"> {{ $data->active }} </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>
@endsection
