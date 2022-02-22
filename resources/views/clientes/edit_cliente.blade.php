@extends('adminlte::page')

@section('title', 'CLIENTE')

@section('content_header')
    <h1>Informacion Cliente</h1>
@stop

@section('content')
<form>
    <div class="form-group row">
        <label for="labelcod" class="col-form-label"> Indentificacion </label>
        <div class="col-sm">
             <input type="text" value="{{$cliente->indentificacion}}" class="col-sm-8 form-control" id="Indentificacion" name="Indentificacion" placeholder="Indentificacion">
        </div>
        <label for="labelproveedor" class="col-form-label">  Nombre  </label>
        <div class="col-sm">
            <input type="text" value="{{$cliente->nombre}}" class="col-sm-8 form-control" id="Nombre" name="Nombre" placeholder="Nombre">
        </div>
        <label for="labelcan" class="col-form-label">  Apellidos  </label>
        <div class="col-sm">
            <input type="text" value="{{$cliente->apellidos}}" class="col-sm-8 form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group row">
        <label for="labelcod" class="col-form-label"> Direccion </label>
        <div class="col-sm">
             <input type="text" value="{{$cliente->direccion}}" class="col-sm-8 form-control" id="inputcod" placeholder="Direccion">
        </div>
        <label for="labelproveedor" class="col-form-label">  Celular  </label>
        <div class="col-sm">
            <input type="text" value="{{$cliente->celular}}" class="col-sm-8 form-control" id="inputproveedor" placeholder="Celular">
        </div>
        <label for="labelcan" class="col-form-label">  Correo  </label>
        <div class="col-sm">
            <input type="text" value="{{$cliente->correo}}" class="col-sm-8 form-control" id="inputcan" placeholder="Correo">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Actualizar</button>
            <a href= "{{ url()->previous() }}"  class="btn btn-info"><i class="fa fa-arrow-left"></i>Regresar</a>
        </div>
    </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop