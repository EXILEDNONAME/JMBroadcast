<!-- <tr>
<td> <label for="status" class="control-label"> Status </label> </td>
<td> <input class="form-control" name="status" type="text" id="status" value="{{ isset($post->status) ? $post->status : ''}}" > </td>
</tr> -->
<input name="created_by" type="hidden" value="{{ Auth::user()->id }}">
<input name="updated_by" type="hidden" value="{{ Auth::user()->id }}">

<tr>
  <td> <label for="active" class="control-label"> Active </label> </td>
  <td>
    <select class="form-control" name="active">
      @if (isset($data->active))
      @if ( $data->active == 1 )
      <option value="1" selected> Yes </option>
      <option value="2"> No </option>
      @else
      <option value="1"> Yes </option>
      <option value="2" selected> No </option>
      @endif
      @else
      <option value="1" selected> Yes </option>
      <option value="2"> No </option>
      @endif
    </select>
  </td>
</tr>
