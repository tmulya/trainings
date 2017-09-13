<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','TestController@index');
Route::get('/test/create','TestController@create');
Route::post('/test', 'TestController@store');
Route::get('/test/{id}/edit', 'TestController@edit');
Route::put('/test/{id}', 'TestController@update');
Route::get('/test/{id}', 'TestController@show');
Route::delete('/test/{id}', 'TestController@destroy');

Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('/mahasiswa' ,'MahasiswaController');
Route::resource('/matakuliah', 'MatakuliahController');
// Route::resource('/test','TestController');