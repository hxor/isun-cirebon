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

Route::get('/', 'IndexController@index');
Route::get('/schedule', 'IndexController@schedule');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('agenda', 'AgendaController');
    Route::get('agenda/{id}/upload', 'AgendaController@createGallery')->name('agenda.upload');
    Route::post('agenda/{id}/upload', 'AgendaController@uploadGallery')->name('agenda.upload.store');
    Route::delete('agenda/{id}/upload/destroy', 'AgendaController@destroyGallery')->name('agenda.upload.destroy');
});

Route::group(['prefix' => 'api/datatable', 'middleware' => 'auth', 'as' => 'table.'], function () {
	Route::get('/agenda', 'AgendaController@dataTable')->name('agenda');
});
