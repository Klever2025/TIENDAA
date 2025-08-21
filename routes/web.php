<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/persona',[PersonaController::class, 'index'])->name('persona.index');
