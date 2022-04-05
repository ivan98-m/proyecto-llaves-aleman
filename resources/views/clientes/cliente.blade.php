{{-- vista dashborad --}}
{{-- @extends('adminlte::page') --}}
@extends('master')

@section('title', 'CLIENTES')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>CLIENTES</h1>
@stop

@section('content')

    <div class="d-flex flex-row-reverse border border-dark p-2 m-1 rounded">
        {{-- <a class="btn btn-success" href=inventario/agregar><i class="fa fa-plus-circle"
                style="font-size:20px;"></i>Agregar</a> --}}
        <a class="btn btn-success" href="#" data-toggle="modal" data-target="#modal_create_clientes">
                <i class="fa fa-plus-circle"style="font-size:20px;"></i>Agregar
        </a>
        @include('clientes.modal_create_clientes')
    </div>
    <div class="border border-dark p-2 m-1 rounded">
        <table id="clientes" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>IDENTIFICACIÓN</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DIRECCIÓN</th>
                    <th>CELULAR</th>
                    <th>CORREO</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->identificacion}}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->celular }}</td>
                        <td>{{ $cliente->correo }}</td>
                        <td>
                            {{-- <a class="btn btn-warning p-1" href="{{ url('/dashboard/clientes/editar/'. $cliente->id) }}" ><i class="fa fa-edit"></i></a> --}}
                            {{-- <a class="btn btn-warning p-1" href="#" data-toggle="modal" data-target="#modal_edit{{$cliente->id}}">
                                <i class="fa fa-edit"></i>
                            </a> --}}
                            <button class="btn btn-warning p-1" data-toggle="modal" data-target="#modal_edit{{$cliente->id}}">
                                <i class="fa fa-edit"></i>
                            </button>
                            {{-- <button type="submit" onclick="confirmDelete()" class="btn btn-danger mt-2"><i class="fa fa-trash"></i></button> --}}
                            <form method="POST" action="{{ route('cliente.delete', $cliente->id) }}" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="btn btn-danger show_confirm p-1"><i class="fa fa-trash"></i></button>
                                {{-- <a  type="submit" class="btn btn-danger p-1" href=""><i class="fa fa-trash"></i></a> --}}
                            </form>
                        </td>
                    </tr>
                    @include('clientes.modal_edit')
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>IDENTIFICACIÓN</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DIRECCIÓN</th>
                    <th>CELULAR</th>
                    <th>CORREO</th>
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
            $('#clientes').DataTable();
        });
    </script>
@stop



