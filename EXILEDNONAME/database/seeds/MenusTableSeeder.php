<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MenusTableSeeder extends Seeder {
  public function run() {
    DB::table('menus')->insert([
      'name' => 'Jasamarga',
      'url' => 'Jasamarga',
      'icon' => 'fa fa-home',
      'parent' => '0',
      'status' => '0',
      'order' => '1',
      'active' => '1',
      'created_by' => '1',
      'updated_by' => '1',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);

    DB::table('menus')->insert([
      'name' => 'Maintenances',
      'url' => 'Maintenances',
      'icon' => 'fa fa-home',
      'parent' => '1',
      'status' => '0',
      'order' => '1',
      'active' => '1',
      'created_by' => '1',
      'updated_by' => '1',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);

    DB::table('menus')->insert([
      'name' => 'Users',
      'url' => 'Users',
      'icon' => 'fa fa-home',
      'parent' => '1',
      'status' => '0',
      'order' => '1',
      'active' => '1',
      'created_by' => '1',
      'updated_by' => '1',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
