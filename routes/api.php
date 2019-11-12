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

    //RECEITA
    Route::get('receita', 'ReceitaController@index');
    Route::get('receita/{id}', 'ReceitaController@show');
    Route::post('receita', 'ReceitaController@store');
    Route::put('receita/{id}', 'ReceitaController@update');
    Route::delete('receita/{id}', 'ReceitaController@delete');

    //PRODUTO
    Route::get('produto', 'ProdutoController@index');
    Route::get('produto/{id}', 'ProdutoController@show');
    Route::post('produto', 'ProdutoController@store');
    Route::put('produto/{id}', 'ProdutoController@update');
    Route::delete('produto/{id}', 'ProdutoController@delete');

    //RECEITA_PRODUTO
    Route::get('ReceitasProduto', 'ReceitasProdController@index');
    Route::get('ReceitasProduto/{id}', 'ReceitasProdController@show');
    Route::post('ReceitasProduto', 'ReceitasProdController@store');
    Route::put('ReceitasProduto/{id}', 'ReceitasProdController@update');
    Route::delete('ReceitasProduto/{id}', 'ReceitasProdController@delete');


});




