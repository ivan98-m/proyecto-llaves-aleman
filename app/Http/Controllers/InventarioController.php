<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function getIndex()
    {
        return view('inventarios.inventario');
    }

    public function getEdit()
    {
        return view('inventarios.edit_inventario');
    }

    public function getAdd()
    {
        return view('inventarios.create_inventario');
    }

    public function getDelete()
    {
        
    }
}
