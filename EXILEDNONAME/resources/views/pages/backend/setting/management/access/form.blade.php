<table width="100%" class="table table-bordered">
  <tr class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <td><label for="name" class="control-label"> Name </label></td>
    <td><input class="form-control" name="name" type="text" id="name" value="{{ isset($data->name) ? $data->name : ''}}" ></td>

  </tr>
  <tr>
    <td> <label for="description" class="control-label"> Description </label> </td>
    <td> <input class="form-control" name="description" type="text" id="description" value="{{ isset($data->description) ? $data->description : ''}}" > </td>
  </tr>
  @include('controller.table.form')
</table>

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
