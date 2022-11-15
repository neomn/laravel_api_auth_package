<?php

namespace neomn\laravel_auth_api;

use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Auth\CreatesUserProviders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class LaraAuthApiServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/laraAutApi.php'=>config_path('laraAuthApi.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes/auth.php');

    }
}
