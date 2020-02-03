<div class="btn-group">
  <a href="{{ url()->current() }}/{{ $item->id }}" title="View"><button type="button" class="btn btn-white btn-xs"><span class="text-inverse"><i class="fas fa-search"></i></span></button></a>
  <a href="{{ url()->current() }}/{{ $item->id }}/edit" title="Edit"><button type="button" class="btn btn-white btn-xs"><span class="text-inverse"><i class="fas fa-edit"></i></span></button></a>
  <form method="POST" action="{{ url()->current() }}/{{ $item->id }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-white btn-xs" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash"></i></button>
  </form>
</div>
