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

    public function editTrabajador(Request $request, $id)
    {
        $trabajador = Trabajador::findOrFail($id);

        $trabajador->id_trabajador = $request->id_trabajador;
        $trabajador->nombres = $request->nombres;
        $trabajador->apellidos = $request->apellidos;
        
        $trabajador->especialidad = $request->especialidad;
        $trabajador->direccion = $request->direccion;
        //$trabajador->stock = $trabajador->stock+$request->stock;
        $trabajador->celular = $request->celular;
        $trabajador->correo = $request->correo;

        $trabajador->save();
        toast('trabajador $trabajador actualizado con exito','success')->autoClose(3000);
        return redirect('/dashboard/trabajadores');
    }
    public function deleteTrabajador($id)
    {
    Trabajador::findOrFail($id)->delete();
    toast('Trabajador eliminado','warning')->autoClose(3000);
    return redirect('/dashboard/trabajadores');
    }
}