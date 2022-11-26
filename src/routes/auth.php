<?php

namespace neomn\laravel_auth_api\routes;

use Illuminate\Support\Facades\Route;
use neomn\laravel_auth_api\Http\Controllers\AuthController;
use neomn\laravel_auth_api\Http\Controllers\RegisterController;
use neomn\laravel_auth_api\Http\Middleware\Register;

Route::prefix('api')->middleware('auth')->group(function (){

    Route::prefix('auth')->group(function (){

        Route::prefix('register')->withoutMiddleware('auth')->middleware('Register')->group(function (){
            Route::post('username',[RegisterController::class,'registerUsingUserName']);
            Route::post('email',[RegisterController::class,'registerUsingEmail']);
            Route::post('phone-number',[RegisterController::class,'registerUsingPhoneNumber']);
            Route::post('social-media',[RegisterController::class,'registerUsingSocialMedia']);
        });

        Route::post('login', [AuthController::class,'login'])->withoutMiddleware('auth');
        Route::post('verify-user-account', [AuthController::class,'verifyUser'])->withoutMiddleware('auth');
        Route::post('update-user-info', [AuthController::class,'updateUserInfo']);
        Route::post('update-phone-number', [AuthController::class,'updatePhoneNumber']);
        Route::post('forget-password', [AuthController::class,'forgetPassword'])->withoutMiddleware('auth');
        Route::post('logout', [AuthController::class,'logout']);
    });
});
