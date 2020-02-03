<ul class="fa-ul">
  <li><span class="fa-li">
    @if ( $item->active == 1 ) <a href="javascript:void(0);" onclick="location.href='{{ URL::current() }}/disable/{{ $item->id }}'" title="Switch To Non-Active"><i class="fas fa-check-square text-success"></i></a>
    @else <a href="javascript:void(0);" onclick="location.href='{{ URL::current() }}/enable/{{ $item->id }}'" title="Switch To Active"><i class="fas fa-square text-danger"></i></a>
    @endif
  </li>
</ul>
