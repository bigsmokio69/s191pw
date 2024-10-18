<?php

use App\Http\Controllers\controladorRepaso1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/repaso', [controladorRepaso1::class, 'vistaRepaso'])->name('repaso');
