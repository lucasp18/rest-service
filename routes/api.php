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

//header('Access-Control-Allow-Origin: *');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('contato/{id}','ContatoController@contato');
Route::get('contato','ContatoController@contatos');
Route::post('contato','ContatoController@store');
Route::put('contato/{id}','ContatoController@update');
Route::delete('contato/{id}','ContatoController@destroy');

Route::get('tipo-contato/combo','TipoContatoController@combo');


Route::group(['middleware' => ['api']], function () {
    Route::post('auth/login', 'ApiController@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('user', 'ApiController@getAuthUser');
    	Route::get('deslogar','ApiController@deslogar');
    });

    

});
