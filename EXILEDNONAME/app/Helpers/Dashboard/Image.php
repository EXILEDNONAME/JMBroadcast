<?php

use App\Model\Dashboard\Image;

function GetCountImage() {
  $data = Image::all();
  if ( count($data) == 0 ) { return 1; }
  else { return count($data) + 1; }
}
