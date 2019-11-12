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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('cidades', 'CidadeController@index');
Route::get('cidades/{id}', 'CidadeController@show');
Route::post('cidades', 'CidadeController@store');
Route::put('cidades/{id}', 'CidadeController@update');
Route::delete('cidades/{id}', 'CidadeController@delete');