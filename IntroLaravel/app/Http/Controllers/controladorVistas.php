<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function procesarCliente(Request $peticion){

        $validacion= $peticion->validate([
            'txtnombre'=> 'required | min:3 | max:25 | alpha',
            'txtapellido'=> 'required | min:3 | max:25 | alpha',
            'txtcorreo'=> 'required | email:rfc,dns',
            'txttelefono'=> 'required | numeric',

        ]); //sirve para determinar las reglas de validacion
        $usuario=$peticion->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }

}
