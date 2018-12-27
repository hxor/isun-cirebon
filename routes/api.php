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

Route::get('schedule', 'ApiController@index');
Route::get('schedule/{id}', 'ApiController@show');

Route::get('archive', 'ApiController@archive');
Route::get('archive/year', 'ApiController@getYearAgenda');
Route::get('archive/month/{year}', 'ApiController@getMonthAgenda');
Route::get('archive/month/{month}/year/{year}', 'ApiController@getArchiveAgenda');
