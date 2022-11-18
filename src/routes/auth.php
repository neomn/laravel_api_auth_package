<?php

namespace neomn\laravel_auth_api\routes;

use Illuminate\Support\Facades\Route;
use neomn\laravel_auth_api\Http\Controllers\AuthController;

Route::prefix('api')->middleware('auth')->group(function (){

    Route::prefix('auth')->group(function (){
        Route::post('login', [AuthController::class,'login'])->withoutMiddleware('auth');
        Route::post('register', [AuthController::class,'register'])->withoutMiddleware('auth');
        Route::post('verify-user', [AuthController::class,'verifyUser'])->withoutMiddleware('auth');
        Route::post('forget-password', [AuthController::class,'forgetPassword'])->withoutMiddleware('auth');
        Route::post('update-phone-number', [AuthController::class,'updatePhoneNumber']);
        Route::post('update-user-info', [AuthController::class,'updateUserInfo']);
        Route::post('logout', [AuthController::class,'logout']);
    });
});
