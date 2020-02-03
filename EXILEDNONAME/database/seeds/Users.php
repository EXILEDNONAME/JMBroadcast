<?php

use Illuminate\Database\Seeder;
use App\User;

class Users extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {

  // ADMIN
    User::create([
      'id_access'  => '1',
      'username'  => 'admin',
      'email' => 'admin@exilednoname.com',
      'phone'  => '08112448111',
      'name'  => 'Administrator',
      'password'  => bcrypt('123456')
    ]);

    // OPERATOR
    User::create([
      'id_access'  => '2',
      'username'  => 'operator',
      'email' => 'operator@exilednoname.com',
      'phone'  => '08112448112',
      'name'  => 'Operator',
      'password'  => bcrypt('123456')
    ]);

  }
}
