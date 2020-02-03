<table width="100%" class="table table-bordered">
  <tr class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <td><label for="name" class="control-label"> Name </label></td>
    <td><input class="form-control" name="name" type="text" id="name" value="{{ isset($data->name) ? $data->name : old('name')}}" ></td>
  </tr>
  <tr class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <td> <label for="description" class="control-label"> Description </label> </td>
    <td>
      <textarea class="form-control" name="description" id="description">{{ isset($data->description) ? $data->description : old('description')}}</textarea>
    </td>
  </tr>
  <tr class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
    <td> <label for="description" class="control-label"> File </label> </td>
    <td>
      @if (isset($data->file))
      <input type="text" class="form-control" value="{{ $data->file }}" readonly>
      @else
      <input class="form-control" name="file" type="file" id="file" text="test">
      @endif

    </td>
  </tr>
  @include('controller.table.form')
  <tr>
    <td> <label for="sort" class="control-label"> Sort </label> </td>
    <td> <input class="form-control" name="sort" type="number" id="sort" value="{{ isset($data->sort) ? $data->sort : broadcast_slide2s_get_count() }}"> </td>
  </tr>
</table>

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
