<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Laboratorio\AnalisisLaboratorioController;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Grupo de rutas para AnalisisLaboratorioController
Route::prefix('analisis_laboratorio')->group(function () {
    Route::get('/', [AnalisisLaboratorioController::class, 'index'])->name('analisis_laboratorios.index');
    Route::get('/formato/{id}', [AnalisisLaboratorioController::class, 'formato'])->name('analisis_laboratorios.formato');
    Route::get('/editar/{id}', [AnalisisLaboratorioController::class, 'editar'])->name('analisis_laboratorios.editar');
    Route::delete('/eliminar/{id}', [AnalisisLaboratorioController::class, 'eliminar'])->name('analisis_laboratorios.eliminar');
    Route::get('/nuevo', [AnalisisLaboratorioController::class, 'crear'])->name('analisis_laboratorios.crear');
});










