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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('residentes','ResidentesController');
// Route::get('residentes', 'ResidentesController@index');
Route::get('ver_residente/{id}', 'ResidentesController@show'); 
Route::get('residentes/guardar', 'ResidentesController@store');