<?php

namespace neomn\laraauthapi\routes;

use Illuminate\Support\Facades\Route;
use neomn\laraauthapi\Http\Controllers\AuthController;

Route::middleware('auth:api')->prefix('auth')->group(function (){
    Route::get('login', AuthController::class,'login');
});
