<?php

namespace App\Http\Controllers;
use App\Models\Proveedores;
Use Alert;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        $proveedores = Proveedores::all();
        return view('proveedores.proveedores',['proveedores' => $proveedores]);
    }

    public function getEdit($id_proveedor)
    {
        $proveedores = Proveedores::findOrfail($id_proveedor);
        return view('proveedores.edit_proveedores', ['id_proveedor'=>$id_proveedor, 'proveedores' => $proveedores]);
    }

    public function createProveedores(Request $request)
    {
        $request->validate([
            'id_proveedor' => 'required|string|max:20',
            'nombre' => 'required|string|max:45',
            'direccion' => 'required|string|max:50',
            'celular' => 'required|string|max:10'
            
        ]);
        $proveedores = new Proveedores([
            'id_proveedor' => $request->id_proveedor,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'celular' => $request->celular
        
        ]);

        toast('Proveedor creado con exito','success')->autoClose(3000);
        $proveedores->save();
        return redirect('/dashboard/proveedores');
    }

    public function editProveedores(Request $request, $id)
    {
        $proveedores = Proveedores::findOrFail($id);
        
        $proveedores->id_proveedor = $request->id_proveedor;
        $proveedores->nombre = $request->nombre;
        $proveedores->direccion = $request->direccion;
        $proveedores->celular = $request->celular;
        $proveedores->save();
        toast('Proveedor actualizado con exito','success')->autoClose(3000);
        return redirect('/dashboard/proveedores');
    }

    public function deleteProveedores($id_proveedor)
    {
        Proveedores::findOrFail($id_proveedor)->delete();
        toast('Proveedor eliminado','warning')->autoClose(3000);
        return redirect('/dashboard/proveedores');
    }
}
