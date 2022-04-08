<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\Cliente;
use Illuminate\Http\Request;

class APIClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente([
            'identificacion' => $request->identificacion,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'correo' => $request->correo
        ]);
        $cliente->save();
        return response(['exito' => "Cliente creado con exito"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            return Cliente::findOrFail($id);
        }catch(Exception $error) {
           return response(['error' => "No se encontro cliente $id"], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        
        $cliente->identificacion = $request->identificacion;
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;
        $cliente->celular = $request->celular;
        $cliente->correo = $request->correo;
        $cliente->save();

        return response(['exito' => "Informacion de cliente actualizada con exito"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Cliente::findOrFail($id)->delete();
            return response(['ok' => "Cliente $id eliminado con exito"], 200);
        }catch(Exception $error) {
           return response(['error' => "No se a podido eliminar cliente $id"], 404);
        }
    }
}
