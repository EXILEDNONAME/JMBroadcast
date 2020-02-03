<?php

use Illuminate\Database\Seeder;
use App\Models\Backend\Broadcast\Setup;

class BroadcastSetups extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {

    Setup::create([
      'title'  => 'Jasamarga',
      'sort'  => '1',
    ]);

  }
}
