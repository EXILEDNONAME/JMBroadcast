@extends('layouts.exilednoname')
@push('css')
<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('page-header', 'Show Detail Content')
@section('page-description', '// ...')

@section('content')
<a href="/dashboard/contents"><button class="btn  btn-inverse btn-sm"><i class="fas fa-undo-alt"></i> Back</button></a>
<a href="/dashboard/contents/{{ $data->id }}/edit"><button class="btn btn-inverse btn-sm"> Edit</button></a>
<form method="POST" action="{{ url('dashboard/contents' . '/' . $data->id) }}" accept-charset="UTF-8" style="display:inline">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>
</form>
<br/><br/>

<div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
        <th> Name </th>
        <td> {{ $data->name }} </td>
      </tr>
      <tr>
        <th> Description </th>
        <td> {{ $data->description }} </td>
      </tr>
    </tbody>
  </table>
  <br />
</div>
@endsection
