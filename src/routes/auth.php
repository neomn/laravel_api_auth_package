<?php

namespace neomn\laraauthapi\routes;

use Illuminate\Support\Facades\Route;
use neomn\laraauthapi\Http\Controllers\AuthController;

Route::middleware('auth:api')->prefix('auth')->group(function (){
    Route::post('login', [AuthController::class,'login'])->withoutMiddleware('auth:api');
    Route::post('register', [AuthController::class,'register'])->withoutMiddleware('auth:api');
    Route::post('verify-user', [AuthController::class,'verifyUser'])->withoutMiddleware('auth:api');
    Route::post('update-phone-number', [AuthController::class,'updatePhoneNumber']);
});
