<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'inicio')->name('raiz'); //En este tipo de ruta view lo primero es la ruta y el segundo parametro es el nombre del archivo

Route::view('/formulario', 'formulario')->name('rutacacas');
Route::view('/consultar', 'clientes')->name('rutaclientes'); */


//rutas para trabajar con clienteController
//Laravel pide que estructuremos el nombre de nuestras rutas de la siguiente manera
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacacas');
Route::post('/cliente', [clienteController::class, 'store'])->name('procCliente');

//Antiguas rutas que estaban en el controlador de vistas
Route::get('/', [clienteController::class,'home'])->name('raiz');
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');

//Rutas para actualizar clientes
Route::get('/cliente/editar/{id}', [clienteController::class, 'edit'])->name('EditarCliente');
Route::put('/cliente/update/{id}', [clienteController::class, 'update'])->name('UpdateCliente');

//Rutas para eliminar clientes
Route::delete('/cliente/delete/{id}', [clienteController::class, 'destroy'])->name('deleteCliente');