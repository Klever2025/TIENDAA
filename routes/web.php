<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ventacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/persona', [PersonaController::class, 'index'])->name('persona.index');
Route::get('/persona/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('/persona', [PersonaController::class, 'store'])->name('persona.store');
Route::get('/persona/{id}', [PersonaController::class, 'show'])->name('persona.show');
Route::get('/persona/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/persona/{id}', [PersonaController::class, 'update'])->name('persona.update');
Route::delete('/persona/{id}', [PersonaController::class, 'destroy'])->name('persona.destroy');
Route::resource('personas', PersonaController::class);


Route::resource('productos', ProductoController::class);

Route::get('/venta', [ventaController::class, 'index'])->name('venta.index');
Route::get('/venta/create', [ventacontroller::class, 'create'])->name('venta.create');
Route::resource('ventas', VentaController::class);
