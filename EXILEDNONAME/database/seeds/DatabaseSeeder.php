<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Accesses::class);
        $this->call(Users::class);
        $this->call(BroadcastSetups::class);
    }
}
