<?php

namespace neomn\laraauthapi\routes;

use Illuminate\Support\Facades\Route;
use neomn\laraauthapi\Http\Controllers\AuthController;
Route::prefix('api')->middleware('auth:api')->group(function (){

    Route::prefix('auth')->group(function (){
        Route::post('login', [AuthController::class,'login'])->withoutMiddleware('auth:api');
        Route::post('register', [AuthController::class,'register'])->withoutMiddleware('auth:api');
        Route::post('verify-user', [AuthController::class,'verifyUser'])->withoutMiddleware('auth:api');
        Route::post('forget-password', [AuthController::class,'forgetPassword'])->withoutMiddleware('auth:api');
        Route::post('update-phone-number', [AuthController::class,'updatePhoneNumber']);
        Route::post('update-user-info', [AuthController::class,'updateUserInfo']);
        Route::post('logout', [AuthController::class,'logout']);
    });
});
