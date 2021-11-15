<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web', 'as' => 'admins.'], function () {
    Route::get('login', 'AuthController@checkLogin')->name('login');
    Route::post('login', 'AuthController@login')->middleware('throttle:6,1');

    Route::middleware('privilege:super')->group(function () {
        Route::get('/', 'DashboardController')->name('home');
        /**
         * Admin Module Routes
         */
        Route::resource('admin', 'AdminController');
        Route::prefix('admins')->group(function () {
            Route::as('admin.')->group(function () {
                Route::post('reset/password', 'AdminController@resetPassword')->name('reset.password');
                Route::post('trash', 'AdminController@trash')->name('trash');
                Route::get('trashed', 'AdminController@trashed')->name('trashed');
                Route::post('restore', 'AdminController@restore')->name('restore');
            });
        });
        /**
         * Category Module Routes
         */
        Route::resource('category', 'CategoryController');
        Route::prefix('categories')->group(function () {
            Route::as('category.')->group(function () {
                Route::post('trash', 'CategoryController@trash')->name('trash');
                Route::get('trashed', 'CategoryController@trashed')->name('trashed');
                Route::post('restore', 'CategoryController@restore')->name('restore');
            });
        });
        /**
         * Product Module Routes
         */
        Route::resource('product', 'ProductController');
        Route::prefix('products')->group(function () {
            Route::as('product.')->group(function () {
                Route::post('trash', 'ProductController@trash')->name('trash');
                Route::get('trashed', 'ProductController@trashed')->name('trashed');
                Route::post('restore', 'ProductController@restore')->name('restore');
            });
        });
        /**
         * Service Module Routes
         */
        Route::resource('service', 'ServiceController');
        Route::prefix('services')->group(function () {
            Route::as('service.')->group(function () {
                Route::post('trash', 'ServiceController@trash')->name('trash');
                Route::get('trashed', 'ServiceController@trashed')->name('trashed');
                Route::post('restore', 'ServiceController@restore')->name('restore');
            });
        });

        Route::get('logout', 'AuthController@logout')->name('logout');
    });
});

