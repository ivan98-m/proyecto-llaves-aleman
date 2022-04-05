<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
Use Alert;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        $clientes = Cliente::all();
        return view('clientes.cliente',['clientes' => $clientes]);
    }

    public function getEdit($id)
    {
        $cliente = Cliente::findOrfail($id);
        return view('clientes.edit_cliente', ['id'=>$id, 'cliente' => $cliente]);
    }

    public function createCliente(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:45',
            'apellidos' => 'required|string|max:45',
            'direccion' => 'required|string|max:100',
            'celular' => 'required|string|max:15',
            'correo' => 'required|string|max:255'
        ]);
        $cliente = new Cliente([
            'identificacion' => $request->opc_documento." ".$request->documento_num,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'correo' => $request->correo
        ]);

        toast('Cliente creado con exito','success')->autoClose(3000);
        $cliente->save();
        return redirect('/dashboard/clientes');
    }

    public function putEdit(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        
        $cliente->identificacion = $request->identificacion;
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;
        $cliente->celular = $request->celular;
        $cliente->correo = $request->correo;
        $cliente->save();
        toast('Cliente actualizado con exito','success')->autoClose(3000);
        //alert()->success('Película editada con exito');
        return redirect('/dashboard/clientes');
    }

    public function deleteCliente($id)
    {
        Cliente::findOrFail($id)->delete();
        toast('Cliente eliminado','warning')->autoClose(3000);
        return redirect('/dashboard/clientes');
    }
}
