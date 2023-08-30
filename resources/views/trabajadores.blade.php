{{-- vista dashborad --}}
{{-- @extends('adminlte::page') --}}
@extends('master')

@section('title', 'TRABAJADORES')

@section('plugins.Datatables' , true)

@section('content_header')
    <h1>TRABAJADORES</h1>
@stop

@section('content')
<div class="d-flex flex-row-reverse border border-dark p-2 m-1 rounded">
    <button class="btn btn btn-success" data-toggle="modal" data-target="#inventario_create">
        <i class="fa fa-plus-circle"></i>Agregar
    </button>
    {{-- <a class="btn btn-success" href="#" data-toggle="modal" data-target="#inventario_create">
            <i class="fa fa-plus-circle"style="font-size:20px;"></i>Agregar
    </a> --}}
    @include('inventarios.trabajadores_create')
</div>

<table id="trabajadores" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>IDENTIFICACIÓN</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>ESPECIALIDAD</th>
                <th>DIRECCIÓN</th>
                <th>CELULAR</th>
                <th>CORREO</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($trabajadores as $trabajador)
            <tr>
                <td>{{ $trabajador->id_trabajador}}</td>
                <td>{{ $trabajador->nombres }}</td>
                <td>{{ $trabajador->apellidos }}</td>
                <td>{{ $trabajador->especialidad }}</td>
                <td>{{ $trabajador->direccion }}</td>
                <td>{{ $trabajador->celular }}</td>
                <td>{{ $trabajador->correo }}</td>
            </tr>
        @endforeach    
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#trabajadores').DataTable();
        });
    </script>
@stop