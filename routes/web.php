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
use Illuminate\Support\Facades\Auth;


Route::auth('login');
Route::get('/', 'LibroController@index');
Route::post('/buscar', [
    'as' => 'buscar',
    'uses' => 'LibroController@buscar',
]);
Route::group(['middleware' => ['auth', 'admin']], function () {
    // Bienvenida
    Route::get('/nuevo', 'LibroController@crear');
    Route::post('/nuevo', 'LibroController@store');
});
/*Route::get('/nuevo', 'LibroController@crear');
Route::post('/nuevo', 'LibroController@store');*/
//Route::get('mostrar/{id}', 'LibroController@show');
Route::get('/mostrar/{id}', [
    'as' => 'mostrar',
    'uses' => 'LibroController@show',
]);