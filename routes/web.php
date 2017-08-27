<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Guest\HomeController@index')->name('home');

// Auth routes
Auth::routes();


/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('home', 'Admin\HomeController@index')->name('home');

    // Resource routes
    Route::resource('news-category', 'Admin\NewsCategoryController');
    Route::resource('news-item', 'Admin\NewsItemController');
    Route::resource('news-tag', 'Admin\NewsTagController');
});