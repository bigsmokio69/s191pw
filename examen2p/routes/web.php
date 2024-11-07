<?php

use App\Http\Controllers\control;
use Illuminate\Support\Facades\Route;

Route::get('/', [control::class, 'inicio'])->name('raiz');
Route::post('/enviar', [control::class, 'mostrar'])->name('nombreruta');