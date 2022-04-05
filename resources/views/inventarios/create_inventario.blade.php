@extends('adminlte::page')

@section('title', 'INVENTARIO')

@section('content_header')
    <h1>INVENTARIO</h1>
@stop

@section('content')
<form method="POST" action="{{route ('inventario/agregar')}}">
    @csrf
    @method('POST')
    <div class="form-group row">
        <label for="labelcod" class="col-sm-1 col-form-label"> COD </label>
        <div class="col-sm-1">
             <input type="text" class="col-md-15 form-control" id="inputcod" placeholder="Codigo">
        </div>
        <label for="labelproveedor" class="col-form-label">  Proveedor  </label>
        <div class="col-sm">
            <input type="text" class="form-control" id="inputproveedor" placeholder="Proveedor">
        </div>
        <label for="labelcan" class="col-form-label">  Cantidad  </label>
        <div class="col-sm">
            <input type="number" class="col-sm-6 form-control" id="inputcan" placeholder="cantidad">
        </div>
    </div>
    <div class="form-group row">
        <label for="labeldet" class="col-sm-1 col-form-label">Detalle</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputdet" placeholder="Detalle">
        </div>
    </div>    
    <div class="form-group row">
        <label for="labelpreventa" class="col-sm-1 col-form-label"> Precio venta </label>
        <div class="col-sm-2">
            <input type="number" class="col-md-15 form-control" id="inputpreventa" placeholder="precio venta">
        </div>
        <label for="labelprepro" class="col-sm-1 col-form-label">  Precio proveedor  </label>
        <div class="col-sm-2">
            <input type="number" class="form-control" id="inputprepro" placeholder="Precio Proveedor">
        </div>
    </div>    
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i>Agregar</button>
            <a href= "{{ url()->previous() }}"  class="btn btn-warning"><i class="fa fa-arrow-left"></i>Regresar</a>
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