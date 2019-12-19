@extends('layouts.default')

@push('css')
<script src="/assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="/assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="/assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
<script src="/assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
<script src="/assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
<script src="/assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
<script src="/assets/js/plugins/tables/datatables/extensions/select.min.js"></script>
<script src="/assets/js/demo_pages/datatables_extension_buttons_html5.js"></script>
<script src="/assets/js/demo_pages/datatables_extension_buttons_print.js"></script>
@endpush

@section('content')
<div class="card">
  <div class="card-header bg-dark text-white header-elements-inline">
    <h5 class="card-title"> Contents </h5>
    <div class="header-elements">
      <div class="list-icons">
        <a class="list-icons-item" data-action="collapse"></a>
        <a class="list-icons-item" data-action="reload"></a>
        <a class="list-icons-item" data-action="remove"></a>
      </div>
    </div>
  </div>

  <table class="table datatable-button-html5-columns">

    <thead>
      <tr>
        <th width="1">ID</th>
        <th> Upload At </th>
        <th> File</th>
        <th> Description </th>
        <th> Type </th>
        <th> Main </th>
        <th> Sort </th>
        <th> Active </th>
        <th width="1"> <i class="icon-menu-open2"></i>
        </tr>
      </thead>
      <tbody>
        @foreach( $data as $item )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->created_at }}</td>
          <td>{{ $item->file }}</td>
          <td>{{ $item->description }}</td>
          <td>

            @if ( $item->type == 1 ) <span class="label label-purple"> Video </span>
            @else <span class="label label-info"> Image </span>
            @endif
          </td>
          <td>
             @if ( $item->status == 1 ) <span class="label label-purple"> Default </span>
             @else <a href="/dashboard/contents/setdefault/{{ $item->id }}"><span class="label label-info"> Set As Default </span></a>
             @endif
           </td>
           <td>{{ $item->sort }} </td>
           <td>
             @if ( $item->active == 1 ) <a href="/dashboard/contents/nonactive/{{ $item->id }}"><span class="label label-success"> Yes </span></a>
             @else <a href="/dashboard/contents/active/{{ $item->id }}"><span class="label label-inverse"> No </span></a>
             @endif
           </td>
           <td class="text-nowrap align-middle text-center">
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
  @endsection

  @push('modal')
  <!-- MODAL PREVIEW -->
  @foreach ($data as $t)
  <div class="modal fade" id="ModalPreview{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <center>
          <video src="/files/{{ $t->file }}" width="100%" preload="metadata" controls /></video></center>
        <div class="modal-footer">
          <a href="javascript:;" class="btn btn-inverse" data-dismiss="modal"> Close </a>

        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- MODAL PREVIEW -->
  @endpush
