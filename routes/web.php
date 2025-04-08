<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalisisLaboratorioController; 

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'Laboratorio'], function () {
    Route::get('/analisis_laboratorios', [AnalisisLaboratorioController::class, 'index']);
    Route::get('/catalogo', [CatalogoProductoController::class, 'index']);
}); 

