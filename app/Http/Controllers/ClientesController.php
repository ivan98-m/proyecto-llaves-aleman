<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getIndex()
    {
        return(view('clientes.cliente'));
    }

    public function getEdit()
    {

    }

    public function getAdd()
    {
        
    }

    public function getDelete()
    {
        
    }
}
