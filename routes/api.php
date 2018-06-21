<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/inserirPrimeiroNivel', [
	'uses' => 'MenuController@inserirPrimeiroNivel',
]);

Route::post('/inserirSegundoNivel', [
	'uses' => 'MenuController@inserirSegundoNivel',
]);

Route::post('/getItens_nivel2', [
	'uses' => 'MenuController@getItens_nivel2',
]);
