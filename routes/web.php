<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contato/{id?}', ['uses'=>'App\Http\Controllers\ContatoController@index']);

Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoController@criar']);

Route::put('/contato', ['uses'=>'App\Http\Controllers\ContatoController@editar']);