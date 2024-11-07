<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('utiles_escolares');
});

Route::post('/enviar', [controladorex::class, ]);
