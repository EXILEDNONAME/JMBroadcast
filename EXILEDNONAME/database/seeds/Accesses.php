<?php

use Illuminate\Database\Seeder;
use App\Models\Backend\Setting\Management\Access;

class Accesses extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Access::create([
      'name'  => 'Administrator',
      'description'  => 'Class Administrator',
      'sort'  => '1',
    ]);

    Access::create([
      'name'  => 'Operator',
      'description'  => 'Class Operator',
      'sort'  => '2',
    ]);

    Access::create([
      'name'  => 'User',
      'description'  => 'Class User',
      'sort'  => '3',
    ]);
  }
}
