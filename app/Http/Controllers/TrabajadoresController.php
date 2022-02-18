<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    public function getIndex()
    {
        return(view('trabajadores'));
    }
}
