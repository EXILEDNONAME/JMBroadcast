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
      <th class="text-nowrap" width="1"> No. </th>
      <th> File </th>
      <th> Name </th>
      <th class="text-nowrap"> Description </th>
      <th class="text-nowrap"> Setup </th>
      <th class="text-nowrap"> Type </th>
      <th class="text-nowrap"> Sort </th>
      <th class="text-nowrap"> Active </th>
      <th class="text-nowrap" width="1"> Action </th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <td class="text-nowrap align-middle text-center"> {{ $loop->iteration }} </td>
      <td> {{ $item->file }} </td>
      <td> {{ $item->name }} </td>
      <td> {{ $item->description }}</td>
      <td class="text-nowrap align-middle text-center">
        @if ( $item->setup == 0 ) Slider @endif
        @if ( $item->setup == 1 ) Headline @endif
        @if ( $item->setup == 2 ) Content @endif
      </td>
      <td class="text-nowrap align-middle text-center">
        @if ( $item->type == 1 ) <span class="label label-purple"> Video </span> @endif
        @if ( $item->type == 2 ) <span class="label label-info"> Image </span> @endif
      </td>
      <td class="text-nowrap align-middle text-center"> {{ $item->sort }}</td>
      <td class="text-nowrap align-middle text-center">
        @if ( $item->active == 1 ) <a href="/dashboard/contents/nonactive/{{ $item->id }}"><span class="label label-success"> Yes </span></a> @endif
        @if ( $item->active == 2 ) <a href="/dashboard/contents/active/{{ $item->id }}"><span class="label label-inverse"> No </span></a> @endif
      </td>
      <td class="text-nowrap align-middle text-center">
        <div class="btn-group">
          <a href="#" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown"> Set As Default </a>
          <ul class="dropdown-menu pull-right">
            <li><a href="/dashboard/contents/setup_headline/{{ $item->id }}"> Headline </a></li>
            <li><a href="/dashboard/contents/setup_content/{{ $item->id }}"> Content </a></li>
            <li><a href="/dashboard/contents/setup_bgslider/{{ $item->id }}"> Background Slider </a></li>
            <li class="divider"></li>
            <li><a href="#">Action 4</a></li>
          </ul>
        </div>
        <button type="button" class="btn btn-inverse btn-sm" data-toggle="modal" data-target="#ModalPreview{{$item->id}}"> Preview </button>
        <form method="POST" action="{{ url('dashboard/contents' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<hr>
Note : <br>
1. Data 'Setup' digunakan untuk di halaman awal ('Content', 'Slider', 'Headline'). <br>
2. Data 'Setup' harus ber-status 'Active'. <br>
3. Data 'Type' Video hanya bisa digunakan ke dalam type 'Content'.
@endsection

@push('js')
<script src="/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="/assets/js/demo/table-manage-default.demo.min.js"></script>
@endpush

@push('init')
TableManageDefault.init();
@endpush

@push('modal')
<!-- MODAL PREVIEW -->
@foreach ($data as $t)
<div class="modal fade" id="ModalPreview{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <center>
        @if ( $t->type == 1 ) <video src="/EXILEDNONAME/files/{{ $t->file }}" width="100%" preload="metadata" controls /></video> @endif
        @if ( $t->type == 2 ) <img src="/EXILEDNONAME/files/{{ $t->file }}" width="100%" /> @endif
      </center>
      <div class="modal-footer">
        <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal"> Close </a>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- MODAL PREVIEW -->
@endpush
