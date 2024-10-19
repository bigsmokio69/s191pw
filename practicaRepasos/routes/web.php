<?php

use App\Http\Controllers\controladorRepaso1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/repaso', [controladorRepaso1::class, 'vistaRepaso'])->name('repaso');

Route::post('/convertmbgb', [controladorRepaso1::class, 'convertirmbgb'])->name('mbgb'); 
Route::post('/convertgbtb', [controladorRepaso1::class, 'convertirgbtb'])->name('gbtb'); 
