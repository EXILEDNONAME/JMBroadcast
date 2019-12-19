<?php

function AccessesGetId() {
  $data = DB::table('accesses')->where('id', Auth::user()->id_access)->first();
  echo $data->id;
}

function AccessesGetName() {
  $data = DB::table('accesses')->where('id', Auth::user()->id_access)->first();
  echo $data->name;
}

function AccessesGetDescription() {
  $data = DB::table('accesses')->where('id', Auth::user()->id_access)->first();
  echo $data->description;
}
