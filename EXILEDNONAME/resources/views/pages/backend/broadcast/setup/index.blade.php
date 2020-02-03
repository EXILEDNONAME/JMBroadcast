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

@section('panel-title', 'Broadcast - Setups')
@section('panel-body')
@if ($message = Session::get('success'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif

@foreach ( $data as $item )
<form action="/dashboard/broadcast/setups/process" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}

	<input name="updated_by" type="hidden" value="{{ Auth::user()->id }}">

	<table width="100%" class="table table-bordered">
		<tr class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
			<td><label for="title" class="control-label"> Title </label></td>
			<td><input class="form-control" name="title" type="text" value="{{ isset($item->title) ? $item->title : old('title')}}" ></td>
		</tr>

		<tr class="form-group {{ $errors->has('time_slide_1') ? 'has-error' : ''}}">
			<td><label for="time_slide_1" class="control-label"> Time Slide 1 </label></td>
			<td><input class="form-control" name="time_slide_1" type="text" value="{{ isset($item->time_slide_1) ? $item->time_slide_1 : old('time_slide_1')}}" ></td>
		</tr>

		<tr class="form-group {{ $errors->has('time_slide_2') ? 'has-error' : ''}}">
			<td><label for="time_slide_2" class="control-label"> Time Slide 2 </label></td>
			<td><input class="form-control" name="time_slide_2" type="text" value="{{ isset($item->time_slide_2) ? $item->time_slide_2 : old('time_slide_2')}}" ></td>
		</tr>

		<!-- <tr class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
			<td><label for="header" class="control-label"> Header </label></td>
			<td><input class="form-control" name="header" type="text" value="{{ isset($item->header) ? $item->header : old('header')}}" ></td>
		</tr>

		<tr class="form-group {{ $errors->has('header_r') ? 'has-error' : ''}}">
			<td><label for="header_r" class="control-label"> Header Right </label></td>
			<td><input class="form-control" name="header_r" type="text" value="{{ isset($item->header_r) ? $item->header_r : old('header_r')}}" ></td>
		</tr>

		<tr class="form-group {{ $errors->has('header_l') ? 'has-error' : ''}}">
			<td><label for="header_l" class="control-label"> Header Left </label></td>
			<td><input class="form-control" name="header_l" type="text" value="{{ isset($item->header_l) ? $item->header_l : old('header_l')}}" ></td>
		</tr>

		<tr class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
			<td><label for="content" class="control-label"> Content </label></td>
			<td><input class="form-control" name="content" type="text" value="{{ isset($item->content) ? $item->content : old('content')}}" ></td>
		</tr> -->

		<tr class="form-group {{ $errors->has('content_r') ? 'has-error' : ''}}">
			<td><label for="content_r" class="control-label"> Content Right </label></td>
			<td><input class="form-control" name="content_r" type="text" value="{{ isset($item->content_r) ? $item->content_r : old('content_r')}}" ></td>
		</tr>

		<!-- <tr class="form-group {{ $errors->has('content_l') ? 'has-error' : ''}}">
			<td><label for="content_l" class="control-label"> Content Left </label></td>
			<td><input class="form-control" name="content_l" type="text" value="{{ isset($item->content_l) ? $item->content_l : old('content_l')}}" ></td>
		</tr> -->

		<tr class="form-group {{ $errors->has('footer') ? 'has-error' : ''}}">
			<td><label for="footer" class="control-label"> Footer </label></td>
			<td><input class="form-control" name="footer" type="text" value="{{ isset($item->footer) ? $item->footer : old('footer')}}" ></td>
		</tr>

		<!-- <tr class="form-group {{ $errors->has('footer_r') ? 'has-error' : ''}}">
			<td><label for="footer_r" class="control-label"> Footer Right </label></td>
			<td><input class="form-control" name="footer_r" type="text" value="{{ isset($item->footer_r) ? $item->footer_r : old('footer_r')}}" ></td>
		</tr>
 
		<tr class="form-group {{ $errors->has('footer_l') ? 'has-error' : ''}}">
			<td><label for="footer_l" class="control-label"> Footer Left </label></td>
			<td><input class="form-control" name="footer_l" type="text" value="{{ isset($item->footer_l) ? $item->footer_l : old('footer_l')}}" ></td>
		</tr> -->

		<tr class="form-group {{ $errors->has('running_text') ? 'has-error' : ''}}">
			<td><label for="running_text" class="control-label"> Running Text </label></td>
			<td><input class="form-control" name="running_text" type="text" value="{{ isset($item->running_text) ? $item->running_text : old('running_text')}}" ></td>
		</tr>

	</table>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Update">
	</div>
</form>
@endforeach

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
