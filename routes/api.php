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

Route::get('buku','BukuController@index');
Route::post('buku','BukuController@create');
Route::get('/buku/{id}','BukuController@detail');
Route::put('/buku/{id}','BukuController@update');
Route::delete('/buku/{id}','BukuController@delete');
