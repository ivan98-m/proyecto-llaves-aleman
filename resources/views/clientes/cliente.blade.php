{{-- vista dashborad --}}
@extends('adminlte::page')

@section('title', 'CLIENTES')

@section('plugins.Datatables' , true)

@section('content_header')
    <h1>CLIENTES</h1>
@stop

@section('content')

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>IDENTIFICACIÓN</th>
                <th>DIRECCIÓN</th>
                <th>CELULAR</th>
                <th>CORREO</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sonya </td>
                <td>Frost</td>
                <td>108557455</td>
                <td>calle falsa 123</td>
                <td>325225225</td>
                <td>sony@gmail.com</td>
                
            </tr>
            <tr>
                <td>Jena </td>
                <td>Gaines</td>
                <td>105855489</td>
                <td>cll 25 cr 45-6</td>
                <td>318525455</td>
                <td>jena@hotmail.com</td>
                
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>IDENTIFICACIÓN</th>
                <th>DIRECCIÓN</th>
                <th>CELULAR</th>
                <th>CORREO</th>
                
            </tr>
        </tfoot>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
    $(document).ready(function() {
        $('#cliente').DataTable();
    } );
    </script>
@stop