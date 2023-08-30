<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        return(view('trabajadores'));
    }
}
