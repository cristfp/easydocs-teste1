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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/comprovantes', 'ComprovantesController@index');
Route::get('/comprovantes/create', 'ComprovantesController@create');
Route::post('/comprovantes/create', 'ComprovantesController@store');
Route::delete('/comprovantes/{id}', 'ComprovantesController@destroy');
Route::get('/comprovantes/edit/{id}', 'ComprovantesController@edit');
Route::put('/comprovantes/update/{id}', 'ComprovantesController@update');
