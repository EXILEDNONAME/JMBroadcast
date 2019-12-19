<?php

function UsersGetId() {
  $data = DB::table('users')->where('id', Auth::user()->id)->first();
  echo $data->id;
}

function UsersGetIdAccess() {
  $data = DB::table('users')->where('id', Auth::user()->id)->first();
  echo $data->id_access;
}

function UsersGetName() {
  $data = DB::table('users')->where('id', Auth::user()->id)->first();
  echo $data->name;
}
