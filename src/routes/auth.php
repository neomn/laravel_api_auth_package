<?php

namespace neomn\laraauthapi\routes;

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->prefix('auth')->group(function (){
    Route::post('login');
});
