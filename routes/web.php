<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

Route::get('/', function () {
    return view('index');
});

Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('ventas', VentaController::class);
//crear venta
Route::get('ventas/create/{clienteId}', [VentaController::class, 'create'])->name('ventas.create');
//receta
Route::get('clientes/{id}/receta', [ClienteController::class, 'receta'])->name('clientes.receta');
