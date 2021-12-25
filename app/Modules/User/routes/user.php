<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web', 'as' => 'users.'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index')->name('home');
    
    Route::prefix('products')->group(function () {
            Route::get('/', 'ProductsController@index')->name('products');
            Route::get('show/{id}/{name}', 'ProductsController@show')->name('products.show');
    });

    Route::prefix('services')->group(function () {
        Route::get('/', 'ServicesController@index')->name('services');
    });

    Route::prefix('about')->group(function () {
        Route::get('/', 'AboutUsController@index')->name('about');
    });

    Route::prefix('contact')->group(function () {
        Route::get('/', 'ContactUsController@index')->name('contact');
        Route::post('/store', 'ContactUsController@store')->name('contact.store');
    });

    Route::prefix('troubleshooting')->group(function () {
        Route::get('/', 'TroubleshootingController@index')->name('troubleshooting');
        Route::post('/store', 'TroubleshootingController@store')->name('troubleshooting.store');
    });

});

