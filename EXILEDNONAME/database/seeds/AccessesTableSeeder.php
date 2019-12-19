<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AccessesTableSeeder extends Seeder {
  public function run() {
    DB::table('accesses')->insert([
      'name' => 'Administrator',
      'description' => 'This Administrators Class',
      'status' => '0',
      'order' => '1',
      'active' => '1',
    ]);
    DB::table('accesses')->insert([
      'name' => 'Operator',
      'description' => 'This Operators Class',
      'status' => '0',
      'order' => '1',
      'active' => '1',
    ]);
    DB::table('accesses')->insert([
      'name' => 'Client',
      'description' => 'This Clients Class',
      'status' => '0',
      'order' => '1',
      'active' => '1',
    ]);
  }
}
