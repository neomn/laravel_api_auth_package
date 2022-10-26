<?php

namespace neomn\laravel_auth_api;

use Illuminate\Support\ServiceProvider;

class LaravelAuthApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        dd('neo first package :)');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
