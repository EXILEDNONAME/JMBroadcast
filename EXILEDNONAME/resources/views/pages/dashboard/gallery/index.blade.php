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
        <th class="text-nowrap" width="1"> Type </th>
        <th class="text-nowrap" width="1"> Sort </th>
        <th class="text-nowrap" data-orderable="false" width="1"> Active </th>
        <th class="text-nowrap" data-orderable="false" width="1"> Status </th>
        <th class="text-nowrap" data-orderable="false" width="1"> Action </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data1 as $item)
      <tr>
        <td> {{ $item->name }} </td>
        <td> {{ $item->description }}</td>
        <td class="text-nowrap align-middle text-center">
          @if ( $item->type == 1 ) <span class="label label-purple"> Image </span> @endif
          @if ( $item->type == 2 ) <span class="label label-info"> Video </span> @endif
        </td>
        <td class="text-nowrap align-middle text-center"> {{ $item->sort }}</td>
        <td class="text-nowrap align-middle text-center">
          @if ( $item->active == 0 ) <a href="/dashboard/galleries/active_image/{{ $item->id }}"><span class="label label-inverse"> No </span></a> @endif
          @if ( $item->active == 1 ) <a href="/dashboard/galleries/nonactive_image/{{ $item->id }}"><span class="label label-success"> Yes </span></a> @endif
        </td>
        <td class="text-nowrap align-middle text-center">
          <?php
          if ( $item->type == 1 && $item->status == 0 ) { echo "<span class='label label-lime'> Default As Slider 2 </span>"; }
          else if ( $item->type == 1 && $item->status == 1 ) { echo "<span class='label label-lime'> Default As Slider 1 </span>"; }
          else { echo "-"; }
          ?>
        </td>
        <td class="text-nowrap align-middle text-center">
          <?php
          if ( $item->type == 1 && $item->status == 0 ) {
            echo "
            <a href='#' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'> Switch </a>
            <ul class='dropdown-menu pull-right'>
            <li><a href='/dashboard/galleries/set_image_1/". $item->id ."'>Set As Image 1 </a></li>
            </ul>
            ";
          }
          if ( $item->type == 1 && $item->status == 1 ) {
            echo "
            <a href='#' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'> Switch </a>
            <ul class='dropdown-menu pull-right'>
            <li><a href='/dashboard/galleries/set_image_2/". $item->id ."'>Set As Image 2 </a></li>
            </ul>
            ";
          }
          ?>
          @if ( $item->type == 1 ) <button type="button" class="btn btn-inverse btn-sm" data-toggle="modal" data-target="#ModalPreviewImage{{$item->id}}"> Preview </button> @endif
          @if ( $item->type == 2 ) <button type="button" class="btn btn-inverse btn-sm" data-toggle="modal" data-target="#ModalPreviewVideo{{$item->id}}"> Preview </button> @endif
          <form method="POST" action="{{ url('dashboard/galleries' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>
          </form>
        </td>
      </tr>
      @endforeach
      @foreach($data2 as $item)
      <tr>
        <td> {{ $item->name }} </td>
        <td> {{ $item->description }}</td>
        <td class="text-nowrap align-middle text-center">
          @if ( $item->type == 1 ) <span class="label label-purple"> Image </span> @endif
          @if ( $item->type == 2 ) <span class="label label-info"> Video </span> @endif
        </td>
        <td class="text-nowrap align-middle text-center"> {{ $item->sort }}</td>
        <td class="text-nowrap align-middle text-center">
          @if ( $item->active == 0 ) <a href="/dashboard/galleries/active_video/{{ $item->id }}"><span class="label label-inverse"> No </span></a> @endif
          @if ( $item->active == 1 ) <a href="/dashboard/galleries/nonactive_video/{{ $item->id }}"><span class="label label-success"> Yes </span></a> @endif
        </td>
        <td class="text-nowrap align-middle text-center">
          <?php
          if ( $item->type == 2 && $item->status == 0 ) { echo "-"; }
          else if ( $item->type == 2 && $item->status == 1 ) { echo "<span class='label label-warning'> Default As Video 1 </span>"; }
          else if ( $item->type == 2 && $item->status == 2 ) { echo "<span class='label label-warning'> Default As Video 2 </span>"; }
          else if ( $item->type == 2 && $item->status == 3 ) { echo "<span class='label label-warning'> Default As Video 3 </span>"; }
          else { echo "-"; }
          ?>
        </td>
        <td class="text-nowrap align-middle text-center">
          <?php
          if ( $item->type == 2 && $item->status == 0 ) {
            echo "
            <a href='#' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'> Switch </a>
            <ul class='dropdown-menu pull-right'>
            <li><a href='/dashboard/galleries/set_video_1/". $item->id ."'>Set As Video 1 </a></li>
            <li><a href='/dashboard/galleries/set_video_2/". $item->id ."'> Set As Video 2 </a></li>
            <li><a href='/dashboard/galleries/set_video_3/". $item->id ."'> Set As Video 3 </a></li>
            </ul>
            ";
          }
          else if ( $item->type == 2 && $item->status == 1 ) {
            echo "
            <a href='#' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'> Switch </a>
            <ul class='dropdown-menu pull-right'>
            <li><a href='/dashboard/galleries/set_video_disable/". $item->id ."'> Disable </a></li>
            <li><a href='/dashboard/galleries/set_video_2/". $item->id ."'> Set As Video 2 </a></li>
            <li><a href='/dashboard/galleries/set_video_3/". $item->id ."'> Set As Video 3 </a></li>
            </ul>
            ";
          }
          else if ( $item->type == 2 && $item->status == 2 ) {
            echo "
            <a href='#' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'> Switch </a>
            <ul class='dropdown-menu pull-right'>
            <li><a href='/dashboard/galleries/set_video_disable/". $item->id ."'> Disable </a></li>
            <li><a href='/dashboard/galleries/set_video_1/". $item->id ."'> Set As Video 1 </a></li>
            <li><a href='/dashboard/galleries/set_video_3/". $item->id ."'> Set As Video 3 </a></li>
            </ul>
            ";
          }
          else if ( $item->type == 2 && $item->status == 3 ) {
            echo "
            <a href='#' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'> Switch </a>
            <ul class='dropdown-menu pull-right'>
            <li><a href='/dashboard/galleries/set_video_disable/". $item->id ."'> Disable </a></li>
            <li><a href='/dashboard/galleries/set_video_1/". $item->id ."'> Set As Video 1 </a></li>
            <li><a href='/dashboard/galleries/set_video_2/". $item->id ."'> Set As Video 2 </a></li>
            </ul>
            ";
          }
          else {
            echo "
            <a href='#' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'> Switch </a>
            <ul class='dropdown-menu pull-right'>
            <li><a href='#'> Set As Video 1 </a></li>
            <li><a href='#'> Set As Video 2 </a></li>
            <li><a href='#'> Set As Video 3 </a></li>
            </ul>
            ";
          }
          ?>
          @if ( $item->type == 1 ) <button type="button" class="btn btn-inverse btn-sm" data-toggle="modal" data-target="#ModalPreviewImage{{$item->id}}"> Preview </button> @endif
          @if ( $item->type == 2 ) <button type="button" class="btn btn-inverse btn-sm" data-toggle="modal" data-target="#ModalPreviewVideo{{$item->id}}"> Preview </button> @endif
          <form method="POST" action="{{ url('dashboard/galleries' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
@foreach ($data1 as $t)
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

@foreach ($data2 as $t)
<div class="modal fade" id="ModalPreviewVideo{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <center>
        <video src="/EXILEDNONAME/files/{{ $t->file }}" width="100%" preload="metadata" controls /></video>
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
