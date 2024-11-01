<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::view('/libro', 'registro')->name('rutaLibro');
