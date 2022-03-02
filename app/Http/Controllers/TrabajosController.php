<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        return view('trabajos');
    }
}
