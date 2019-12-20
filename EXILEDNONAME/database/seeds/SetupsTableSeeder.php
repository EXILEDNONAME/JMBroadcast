<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SetupsTableSeeder extends Seeder {
  public function run() {
    DB::table('setups')->insert([
      'title' => ' ',
      'page_title' => ' ',
      'header_left' => ' ',
      'header_right' => ' ',
      'content_left' => ' ',
      'content_right' => ' ',
      'footer' => ' ',
      'footer_lines' => ' ',
      'active' => '1',
      'status' => '0',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
