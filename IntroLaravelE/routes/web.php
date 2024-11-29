<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


Route::resource('cliente', ClienteController::class);
Route::get('/', [clienteController::class, 'home'])->name('rutaInicio');