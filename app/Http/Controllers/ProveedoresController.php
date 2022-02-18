<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function getIndex()
    {
        return view('proveedores');
    }
    
}
