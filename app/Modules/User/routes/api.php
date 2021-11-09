<?php

use Illuminate\Support\Facades\Route;

Route::namespace('User\Http\Controllers')->prefix('api')->middleware(['api', 'localization'])->group(function () {
    Route::middleware(['hasDevice'])->group(function () {
        
    });

    Route::middleware('auth:api')->group(function () {
        Route::post('logout', 'AuthController@logout');
    });
});
