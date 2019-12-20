<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SetupsTableSeeder extends Seeder {
  public function run() {
    DB::table('setups')->insert([
      'title' => 'TITLE EXILEDNONAME',
      'page_title' => 'PAGE TITLE EXILEDNONAME',
      'header_left' => 'HEADER LEFT EXILEDNONAME',
      'header_right' => 'HEADER RIGHT EXILEDNONAME',
      'content_left' => 'CONTENT LEFT EXILEDNONAME',
      'content_right' => 'CONTENT RIGHT EXILEDNONAME',
      'footer' => 'FOOTER EXILEDNONAME',

      // 'header_left_social' => ' ',
      // 'header_right_custom' => ' ',
      // 'headline' => ' ',
      // 'footer_right' => ' ',
      'active' => '1',
      'status' => '0',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
