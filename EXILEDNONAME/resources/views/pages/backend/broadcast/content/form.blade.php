<table width="100%" class="table table-bordered">
  <tr class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <td><label for="title" class="control-label"> Title </label></td>
    <td><input class="form-control" name="title" type="text" value="{{ isset($data->title) ? $data->title : old('title')}}" ></td>
  </tr>
  <tr class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <td> <label for="content" class="control-label"> Description </label> </td>
    <td>
      <textarea class="form-control" name="content">{{ isset($data->content) ? $data->content : old('content')}}</textarea>
    </td>
  </tr>
  @include('controller.table.form')
  <tr>
    <td> <label for="sort" class="control-label"> Sort </label> </td>
    <td> <input class="form-control" name="sort" type="number" id="sort" value="{{ isset($data->sort) ? $data->sort : broadcast_contents_get_count() }}"> </td>
  </tr>
</table>

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
