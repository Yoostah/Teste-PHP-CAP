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


Route::apiResource('funcionarios', 'api\FuncionarioController');

Route::apiResource('postos_trabalho', 'api\PostoController');

Route::apiResource('habilitacoes', 'api\HabilitacaoController');
Route::middleware('api')->get('habilitacoes/location/brasil', 'api\HabilitacaoController@findBrasilianWorkers');
