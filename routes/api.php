<?php

use App\Http\Controllers\BuscaCepController;
use App\Http\Controllers\EnderecoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('endereco', EnderecoController::class);
Route::get('busca/cep/{cep}', [BuscaCepController::class, 'buscaCep']);
Route::get('busca/{uf}/{cidade}/{logradouro}', [BuscaCepController::class, 'buscaCepMult']);
