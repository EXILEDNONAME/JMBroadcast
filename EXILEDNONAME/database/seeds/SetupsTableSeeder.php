<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SetupsTableSeeder extends Seeder {
  public function run() {
    DB::table('setups')->insert([
      'title' => 'EXILEDNONAME',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
