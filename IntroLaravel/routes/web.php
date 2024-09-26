<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'welcome'); //En este tipo de ruta view lo primero es la ruta y el segundo parametro es el nombre del archivo

Route::view('/formulario', 'formulario');
