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
        //repuesta a la peticion POST
        //return $peticion->ip();
        //return $peticion->path();
        //return $peticion->url();
        return $peticion->all();

    }

}
