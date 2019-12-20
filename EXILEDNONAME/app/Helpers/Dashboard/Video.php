<?php

use App\Model\Dashboard\Video;

function GetCountVideo() {
  $data = Video::all();
  if ( count($data) == 0 ) { return 1; }
  else { return count($data) + 1; }
}
