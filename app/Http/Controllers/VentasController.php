<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function getIndex()
    {
        return view('ventas');
    }
}
