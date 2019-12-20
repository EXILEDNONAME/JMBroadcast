@extends('layouts.exilednoname')
@push('css')
<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('page-header', 'PAGE HEADER')
@section('page-description', 'PAGE DESCRIPTION')

@section('content')
<div class="table-responsive">
<table id="data-table-default" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th> Name </th>
      <th class="text-nowrap"> Description </th>
      <th class="text-nowrap" width="1"> Sort </th>
      <th class="text-nowrap" data-orderable="false" width="1"> Active </th>
      <th class="text-nowrap" data-orderable="false" width="1"> Action </th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <td> {{ $item->name }} </td>
      <td> {{ $item->description }}</td>
      <td class="text-nowrap align-middle text-center"> {{ $item->sort }}</td>
      <td class="text-nowrap align-middle text-center">
        @if ( $item->active == 0 ) <a href="/dashboard/contents/active/{{ $item->id }}"><span class="label label-inverse"> No </span></a> @endif
        @if ( $item->active == 1 ) <a href="/dashboard/contents/nonactive/{{ $item->id }}"><span class="label label-success"> Yes </span></a> @endif
      </td>
      <td class="text-nowrap align-middle text-center">
        <a href="/dashboard/contents/{{ $item->id}}"><button type="button" class="btn btn-inverse btn-sm"> Preview </button></a>
        <a href="/dashboard/contents/{{ $item->id}}/edit"><button type="button" class="btn btn-inverse btn-sm"> Edit </button></a>
        <form method="POST" action="{{ url('dashboard/contents' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<!-- <hr>
Note : <br>
1. Data 'Setup' digunakan untuk di halaman awal ('Content', 'Slider', 'Headline'). <br>
2. Data 'Setup' harus ber-status 'Active'. <br>
3. Data 'Type' Video hanya bisa digunakan ke dalam type 'Content'. -->
@endsection

@push('js')
<script src="/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="/assets/js/demo/table-manage-default.demo.min.js"></script>
@endpush

@push('init')
TableManageDefault.init();
@endpush
