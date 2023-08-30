<?php

namespace App\Http\Controllers;
use App\Models\Trabajador;
Use Alert;
use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        $trabajadores = Trabajador::all();
        return(view('trabajadores',['trabajadores'=>$trabajadores]));
    }

    public function createTrabajador(Request $request){
        $trabajador = new Trabajador([
            'id_trabajador' => $request->id_trabajador,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'especialidad' => $request->especialidad,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'correo' => $request->correo
        ]);
        toast('Producto creado con exito','success')->autoClose(3000);
        $trabajador->save();
        return redirect('/dashboard/trabajadores');
    }
}