<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{

    public function home(){
        return view('inicio');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes=DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Sirve para abrir el formulario
     */
    public function create()
    {
        return view('formulario');  
    }

    /**
     * Store PREPARES THE INSERT.
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" =>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        $usuario=$request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consulta=DB::table('cliente')->where('id', $id)->first();
        return view('actualizar', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {

        DB::table('cliente')->where('id', $id)->update([
            "nombre" => $request->input('txtnombre'),
            "apellido" =>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at"=>Carbon::now()
        ]);
        
        session()->flash('actualizado', 'Se actualizo con exito el usuario '. $request->input('txtnombre'));
        return to_route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nombre=DB::table('cliente')->where('id', $id)->first();
        DB::table('cliente')->where('id', $id)->delete();

        session()->flash('eliminado', 'Se elimino al usuario ' .$nombre->nombre);
        return to_route('rutaclientes');
    }
}
