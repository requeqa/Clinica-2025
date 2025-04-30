<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Farmacia\ProductoController;

Route::get('/producto/crear', [ProductoController::class, 'crear'])->name('producto.crear');
Route::post('/producto/guardar', [ProductoController::class, 'guardar'])->name('producto.guardar');
