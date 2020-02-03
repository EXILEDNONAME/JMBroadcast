<!-- <tr>
  <td style="vertical-align: middle"> Status </td>
  <td style="vertical-align: middle"> {{ $data->status }} </td>
</tr> -->
<tr>
  <td style="vertical-align: middle" width="30%"> Sort </td>
  <td style="vertical-align: middle"> {{ $data->sort }} </td>
</tr>
<tr>
  <td style="vertical-align: middle"> Active </td>
  <td style="vertical-align: middle">
    @if ( $data->active == 1 ) <span class="label label-success"> Yes </span>
    @else <span class="label label-inverse"> No </span>
    @endif
  </td>
</tr>
<tr>
  <td style="vertical-align: middle"> Created At </td>
  <td style="vertical-align: middle"> {{ $data->created_at }} </td>
</tr>
<tr>
  <td style="vertical-align: middle"> Updated At </td>
  <td style="vertical-align: middle"> {{ $data->updated_at }} </td>
</tr>
<tr>
  <td style="vertical-align: middle"> Created By </td>
  <td style="vertical-align: middle">
    @if ( DB::table('users')->where('id', $data->created_by)->first() != false )
    $show_created_by = DB::table('users')->where('id', $data->created_by)->get();
    foreach ( $show_created_by as $item )
    echo $item->name;
    @endif
  </td>
</tr>
<tr>
  <td style="vertical-align: middle"> Updated By </td>
  <td style="vertical-align: middle">
    @if ( DB::table('users')->where('id', $data->updated_by)->first() != false )
    $show_updated_by = DB::table('users')->where('id', $data->updated_by)->get();
    foreach ( $show_updated_by as $item )
    echo $item->name;
    @endif
  </td>
</tr>
