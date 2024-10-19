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

    public function convertirmbgb(Request $request){
        
        $conv=$request->input('conv');
        $cantidad=$request->input('cantidad');
        $expr='/^\d+(\.\d+)?$/';

        if (!preg_match($expr, $cantidad)) {
            return 'No pusiste un número válido';
        }

        if($conv==1) {
            $res= $cantidad/1024;
            return "El resultado de tu conversión es: " . $res . " GB";
        } elseif ($conv==2) {
            $res= $cantidad * 1024;
            return "El resultado de tu conversión es: " . $res . " MB";

        } else {
            $res='ERROR en el select';
            return $request->all();
        }   

    }

    public function convertirgbtb(Request $request){

        $conv=$request->input('conv2');
        $cantidad=$request->input('cantidad2');
        $expr='/^\d+(\.\d+)?$/';

        if (!preg_match($expr, $cantidad)) {
            return 'No pusiste un número válido';
        }

        if ($conv==3) {
            $res= $cantidad / 1024;
            return "El resultado de tu conversión es: " . $res . " TB";   
        }elseif($conv==4){
            $res= $cantidad * 1024;
            return "El resultado de tu conversión es: " . $res . " GB";
        } else {
            $res='ERROR';
            return $res;
        } 
    }
}
