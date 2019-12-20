<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContentsTableSeeder extends Seeder {
  public function run() {
    DB::table('contents')->insert([
      'name' => 'Test - 1',
      'description' => 'Test - 1',
      'active' => '1',
      'sort' => '1',
      'status' => '0',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
    DB::table('contents')->insert([
      'name' => 'Test - 2',
      'description' => 'Test - 2',
      'active' => '1',
      'sort' => '2',
      'status' => '0',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
    DB::table('contents')->insert([
      'name' => 'Test - 3',
      'description' => 'Test - 3',
      'active' => '1',
      'sort' => '3',
      'status' => '0',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
    DB::table('contents')->insert([
      'name' => 'Test - 4',
      'description' => 'Test - 4',
      'active' => '1',
      'sort' => '4',
      'status' => '0',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
    DB::table('contents')->insert([
      'name' => 'Test - 5',
      'description' => 'Test - 5',
      'active' => '1',
      'sort' => '5',
      'status' => '0',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
