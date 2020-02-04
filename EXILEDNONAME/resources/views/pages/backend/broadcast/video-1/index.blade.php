@extends('layouts.default')

@push('head')
<link href="/themes/backend/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="/themes/backend/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="/themes/backend/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endpush

@section('panel-button')
<a href="{{ URL::current() }}/create">
  <button class="btn btn-inverse" title="Create"><i class="fas fa-plus"></i></button>
</a>
@endsection

@section('panel-title', 'Broadcast - Video 1')
@section('panel-body')
@if ($message = Session::get('success'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif

<div class="table-responsive">
  <table width="100%" id="table-exilednoname" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th width="1%"> # </th>
        <th class="text-nowrap"> Name </th>
        <th> Description </th>
        <th> File </th>
				<th> Created At </th>
				<th width="1%" class="text-nowrap"> Sort </th>
        <th width="1%" class="text-nowrap" data-orderable="false"> Active </th>
        <th width="1%" class="text-nowrap" data-orderable="false"></th>
      </tr>
    </thead>
    <tbody>
      @foreach( $data as $item )
      <tr>
        <td style="vertical-align: middle"> {{ $loop->iteration }} </td>
        <td style="vertical-align: middle"> {{ $item->name }} </td>
        <td style="vertical-align: middle"> {{ $item->description }} </td>
        <td style="vertical-align: middle"> {{ $item->file }} </td>
				<td width="1%" class="text-nowrap" style="vertical-align: middle"> {{ $item->created_at }} </td>
				<td width="1%" class="text-nowrap" style="vertical-align: middle; text-align:center"> {{ $item->sort }} </td>
				<td style="vertical-align: middle"> @include('controller.datatable.active') </td>
        <td style="vertical-align: middle"> @include('controller.datatable.action') </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@push('js')

<script src="/themes/backend/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/themes/backend/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/themes/backend/external/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="/themes/backend/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#table-exilednoname').DataTable({
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // page length options
            dom: 'Bfrtip',
            buttons: [

              'pageLength',
              {
                text: '<i class="fas fa-sync fa-spin"></i>',
                titleAttr: 'Refresh',
                action: function ( e, dt, node, config ) {
                  dt.ajax.reload();
                }
              },
              {
                extend: 'collection',
                text: '<i class="fas fa-download"></i>',
                titleAttr: 'Export',
                buttons: [
                  {
                    extend: 'copyHtml5',
                    autoClose: 'true',
                    text:'Copy',
                    exportOptions: {
                      columns: [ 0, ':visible' ]
                    },
                  },
                  {
                    extend: 'excelHtml5',
                    exportOptions: {
                      columns: ':visible'
                    }
                  },
                  {
                    extend: 'pdfHtml5',
                    exportOptions: {
                      columns: ':visible'
                    }
                  },
                  'csv',
                  'print',
                ]
              }
            ],
        });
    });
</script>
@endpush

@push('init')
@endpush
