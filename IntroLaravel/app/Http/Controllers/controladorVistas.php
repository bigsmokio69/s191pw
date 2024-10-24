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

        //return redirect('/');
        //return redirect()->route('rutaclientes');
        //return back(); //Hace una direccion hacia el punto anterior del form, en este caso el mismo form
        /* 
        $id=[['usuario'=>'1'], ['usuario'=>'2']];
        return view('formulario', compact('id')); */

        $usuario=$peticion->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');

    }

}
