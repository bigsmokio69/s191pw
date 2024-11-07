<?php

namespace App\Http\Controllers;

use App\Http\Requests\validar;
use Illuminate\Http\Request;

class control extends Controller
{
    public function inicio(){
        return view('utiles_escolares');
    }

    public function mostrar(validar $peti){
        $nombre=$peti->input('nombre');
        $marca=$peti->input('marca');
        session()->flash('funciona', 'Se guardo: '. $nombre. ' '.$marca);
        return to_route('raiz');
    }
}
