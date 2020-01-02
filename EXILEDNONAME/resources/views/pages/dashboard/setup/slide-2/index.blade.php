@extends('layouts.exilednoname')
@push('css')
<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('page-header', 'All Galleries')
@section('page-description', '// Show Your Galleries ...')

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
          @if ( $item->active == 1 ) <a href="/dashboard/setups/slide-2/nonactive/{{ $item->id }}"><span class="label label-success"> Yes </span></a> @endif
          @if ( $item->active == 2 ) <a href="/dashboard/setups/slide-2/active/{{ $item->id }}"><span class="label label-inverse"> No </span></a> @endif
        </td>
        <td class="text-nowrap align-middle text-center">
          <button type="button" class="btn btn-inverse btn-sm"> Edit </button>
          <button type="button" class="btn btn-inverse btn-sm" data-toggle="modal" data-target="#ModalPreviewImage{{$item->id}}"> Preview </button>
          <form method="POST" action="{{ url('dashboard/setups/slide-2' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
<div class="modal fade" id="ModalPreviewImage{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <center>
        <img src="/EXILEDNONAME/files/{{ $t->file }}" width="100%" />
      </center>
      <div class="modal-footer">
        <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal"> Close </a>
      </div>
    </div>
  </div>
</div>
@endforeach

@endpush
