<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'inicio')->name('raiz'); //En este tipo de ruta view lo primero es la ruta y el segundo parametro es el nombre del archivo

Route::view('/formulario', 'formulario')->name('rutacacas');
Route::view('/consultar', 'clientes')->name('rutaclientes'); */

Route::get('/', [controladorVistas::class,'home'])->name('raiz');
Route::get('/consultar', [controladorVistas::class, 'select'])->name('rutaclientes');

Route::view('/component', 'componentes')->name('rutacomps');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('procCliente');


//rutas para trabajar con clienteController
//Laravel pide que estructuremos el nombre de nuestras rutas de la siguiente manera
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacacas');