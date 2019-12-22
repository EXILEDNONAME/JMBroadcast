<table width="100%" class="table table-condensed">
  <tr class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Name </td>
    <td width="1%" class="text-nowrap align-middle">: </td>
    <td width="75%"><input class="form-control" name="name" type="text" value="{{ isset($data->name) ? $data->name : old('name')}}" required></td>
  </tr>
  <tr class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Description </td>
    <td width="1%" class="text-nowrap align-middle">: </td>
    <td><input class="form-control" name="description" type="text" value="{{ isset($data->description) ? $data->description : old('description')}}" required></td></td>
  </tr>
  <tr class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> Sort </td>
    <td width="1%" class="text-nowrap align-middle">: </td>
    <td><input class="form-control" name="sort" type="number" value="{{ isset($data->sort) ? $data->sort : old('sort')}}" required></td>
  </tr>
  <tr class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <td width="24%" class="text-nowrap align-middle"> </td>
    <td width="1%" class="text-nowrap align-middle"> </td>
    <td width="75%" class="text-nowrap align-middle">
      <a href="/dashboard/contents"><button type="cancel" class="btn btn-danger"><i class="fas fa-undo-alt"></i> Back</button></a>
      <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </td>
  </tr>
</table>
