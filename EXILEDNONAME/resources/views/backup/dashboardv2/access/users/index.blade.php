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
    <h5 class="card-title">Column selectors</h5>
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
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th width="1"> <i class="icon-menu-open2"></i>
        </tr>
      </thead>
      <tbody>
        @foreach( $data as $item )
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->created_at }}</td>

          <td class="text-center">
            <div class="list-icons">
              <a href="#" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
              <a href="#" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
              <a href="#" class="list-icons-item text-teal-600"><i class="icon-cog6"></i></a>
            </div>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection
