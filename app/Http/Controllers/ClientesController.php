<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

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

    public function getAdd()
    {
        
    }

    public function getDelete()
    {
        
    }
}
