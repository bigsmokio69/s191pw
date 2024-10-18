<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorRepaso1 extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function vistaRepaso(){
        return view('repaso1');
    }
}
