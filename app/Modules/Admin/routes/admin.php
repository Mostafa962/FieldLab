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
                Route::get('trashed', 'AdminController@trashed')->name('trashed');
                Route::post('restore', 'AdminController@restore')->name('restore');
                Route::post('reset/password', 'AdminController@resetPassword')->name('password.reset');
                Route::post('trash', 'AdminController@trash')->name('trash');
                Route::get('profile', 'AdminController@viewProfile')->name('profile');
            });
        });

        Route::get('logout', 'AuthController@logout')->name('logout');
    });
});

