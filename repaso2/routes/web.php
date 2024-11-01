<?php

use App\Http\Controllers\controladorV;
use Illuminate\Support\Facades\Route;

Route::get('/', [controladorV::class, 'principal'])->name('raiz');
Route::get('/libro', [controladorV::class, 'registro'])->name('rutalibro');

Route::post('/envlibro', [controladorV::class, 'regLibro'])->name('regLib');

