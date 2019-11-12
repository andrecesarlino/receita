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

Route::group(['middleware' => 'auth:api'], function() {

    //CIDADE
    Route::get('cidade', 'CidadeController@index');
    Route::get('cidade/{id}', 'CidadeController@show');
    Route::post('cidade', 'CidadeController@store');
    Route::put('cidade/{id}', 'CidadeController@update');
    Route::delete('cidade/{id}', 'CidadeController@delete');

    // PESSOA
    Route::get('pessoa', 'PessoaController@index');
    Route::get('pessoa/{id}', 'PessoaController@show');
    Route::post('pessoa', 'PessoaController@store');
    Route::put('pessoa/{id}', 'PessoaController@update');
    Route::delete('pessoa/{id}', 'PessoaController@delete');

    //PRAGA
    Route::get('praga', 'PragaController@index');
    Route::get('praga/{id}', 'PragaController@show');
    Route::post('praga', 'PragaController@store');
    Route::put('praga/{id}', 'PragaController@update');
    Route::delete('praga/{id}', 'PragaController@delete');

    //CULTURA
    Route::get('cultura', 'CulturaController@index');
    Route::get('cultura/{id}', 'CulturaController@show');
    Route::post('cultura', 'CulturaController@store');
    Route::put('cultura/{id}', 'CulturaController@update');
    Route::delete('cultura/{id}', 'CulturaController@delete');


});




