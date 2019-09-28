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

Route::get('/banca', 'BancaController@index');
Route::get('/banca/{id}', 'BancaController@getId');
Route::put('/banca/{id}', 'BancaController@update');
Route::post('/banca', 'BancaController@store');


Route::get('/lancamentos', 'LancamentoController@index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
