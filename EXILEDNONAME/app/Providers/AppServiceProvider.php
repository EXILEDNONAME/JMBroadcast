<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/Users.php';
        require_once app_path() . '/Helpers/Accesses.php';
        require_once app_path() . '/Helpers/Defaults.php';
        require_once app_path() . '/Helpers/Dashboard/Content.php';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
