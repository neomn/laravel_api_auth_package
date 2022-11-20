<?php

namespace neomn\laravel_auth_api;

use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Auth\CreatesUserProviders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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


        //Add this custom validation rule.
        Validator::extend('alpha_spaces', function ($attribute, $value) {

            // This will only accept alpha and spaces.
            // If you want to accept hyphens use: /^[\pL\s-]+$/u.
            return preg_match('/^[\pL\s]+$/u', $value);
        });

    }
}
