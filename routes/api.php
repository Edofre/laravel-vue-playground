<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/news-tags', 'Api\NewsTagController@index')->name('news-tags.index');
Route::post('/news-tags', 'Api\NewsTagController@store')->name('news-tags.store');
Route::delete('news-tags/{newsTag}', 'Api\NewsTagController@destroy')->name('news-tags.delete');