{{-- vista dashborad --}}
{{-- @extends('adminlte::page') --}}
@extends('master')

@section('title', 'INVENTARIO')

@section('plugins.Datatables' , true)

@section('content_header')
    <h1>INVENTARIO</h1> 
@stop

@section('content')
<div class="d-flex flex-row-reverse border border-dark p-2 m-1 rounded">
    <button class="btn btn btn-success" data-toggle="modal" data-target="#inventario_create">
        <i class="fa fa-plus-circle"></i>Agregar
    </button>
    {{-- <a class="btn btn-success" href="#" data-toggle="modal" data-target="#inventario_create">
            <i class="fa fa-plus-circle"style="font-size:20px;"></i>Agregar
    </a> --}}
    @include('inventarios.inventario_create')
</div>
{{-- @foreach($proveedores as $proveedor)

{{ $proveedor='holaaa'}}
@endforeach --}}
<div class="border border-dark p-2 m-1 rounded">
<table id="inventario" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE PRODUCTO</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                    <tr>
                        @foreach ($proveedores as $proveedor)
                            @if ($proveedor->id_proveedor == $articulo->id_proveedor)
                                @php
                                    $nom_proveedor = $proveedor->nom_proveedor
                                @endphp
                                @break
                            @endif   
                        @endforeach
                        <td>{{ $articulo->cod_articulo}}</td>
                        <td>{{ $articulo->art_nombre}}</td>
                        <td>{{ $articulo->art_descripcion}}</td>
                        <td>{{ $articulo->p_venta}}</td>
                        <td>{{ $articulo->stock}}</td>
                        <td>
                            <button class="btn btn-primary p-1" data-toggle="modal" data-target="#inventario_show{{ $articulo->cod_articulo, $nom_proveedor}}">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button class="btn btn-warning p-1" data-toggle="modal" data-target="#inventario_edit{{ $articulo->cod_articulo }}">
                                <i class="fa fa-edit"></i>
                            </button>
                            <form method="POST" action="{{ route('product.delete', $articulo->cod_articulo) }}" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="btn btn-danger show_confirm p-1"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @include('inventarios.inventario_show')
                    @include('inventarios.inventario_edit')
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE PRODUCTO</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>
@include('notificaciones')
@stop

@section('js')
    <script> 
        $(document).ready(function() {
        $('#inventario').DataTable();
        });
    </script>
@stop