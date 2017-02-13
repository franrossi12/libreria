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

Route::auth('login');
Route::get('/', 'LibroController@index');
Route::post('/buscar', [
    'as' => 'buscar',
    'uses' => 'LibroController@buscar',
]);
Route::get('/nuevo', 'LibroController@crear');
Route::post('/nuevo', 'LibroController@store');
//Route::get('mostrar/{id}', 'LibroController@show');
Route::get('/mostrar/{id}', [
    'as' => 'mostrar',
    'uses' => 'LibroController@show',
]);