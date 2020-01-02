<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder {
  public function run() {
    DB::table('users')->insert([
      'id_access' => '1',
      'name' => 'Admin',
      'username' => 'admin',
      'phone' => '08111',
      'email' => 'admin@exilednoname.com',
      'password' => bcrypt('123456'),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
    DB::table('users')->insert([
      'id_access' => '2',
      'name' => 'Operator',
      'username' => 'operator',
      'phone' => '08222',
      'email' => 'operator@exilednoname.com',
      'password' => bcrypt('123456'),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
    DB::table('users')->insert([
      'id_access' => '3',
      'name' => 'Client',
      'username' => 'client',
      'phone' => '08333',
      'email' => 'client@exilednoname.com',
      'password' => bcrypt('123456'),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
