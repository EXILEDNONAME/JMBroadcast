<?php

use App\Model\Dashboard\Content;

function GetCountContent() {
  $data = Content::all();
  if ( count($data) == 0 ) { return 1; }
  else { return count($data) + 1; }
}
