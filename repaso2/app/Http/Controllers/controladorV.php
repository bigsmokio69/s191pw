<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarLibro;

class controladorV extends Controller
{
    public function principal(){
        return view('principal');
    }

    public function registro(){
        return view('registro');
    }

    public function regLibro(validarLibro $peti){
        $titulo=$peti->input('titulo');
        return "El libro que guardaste es ". $titulo;
    }
}