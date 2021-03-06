<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Role;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $data['roles'] = Role::all();
        view()->share($data);
    }
}
