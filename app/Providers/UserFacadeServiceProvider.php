<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App;
class UserFacadeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('user', function()
        {
            return new \App\MyFacades\User;
        });
    }
}