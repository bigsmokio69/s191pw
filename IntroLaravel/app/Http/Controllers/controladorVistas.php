<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    //validadorCliente es de donde vamos a sacar nuestro request, antes era Request pero ahora es validadorCliente 
    public function procesarCliente(validadorCliente $peticion){ 

        $usuario=$peticion->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }

}
