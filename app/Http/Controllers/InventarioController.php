<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;


class InventarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        $inventario = Inventario::all();
        return view('inventarios.inventario');
    }
            
    public function getEdit()
    {
        return view('inventarios.edit_inventario');
    }

    public function getAdd(Request $request)
    {
        
        return view('inventarios.create_inventario');
    }

    public function getDelete()
    {
        
    }
}
