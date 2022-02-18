{{-- vista dashborad --}}
@extends('adminlte::page')

@section('title', 'INVENTARIO')

@section('plugins.Datatables' , true)

@section('content_header')
    <h1>INVENTARIO</h1>
    
    
@stop

@section('content')
<div class="d-flex flex-row-reverse border border-dark p-2 m-1 rounded">
    <a class="btn btn-success" href= inventario/agregar  ><i class="fa fa-plus-circle"style="font-size:20px;" ></i>Agregar</a>
</div>
<div class="border border-dark p-2 m-1 rounded">
<table id="inventario" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>PROVEEDOR</th>
                <th>CANTIDAD</th>
                <th>DETALLE</th>
                <th>PRECIO_VENTA</th>
                <th>PRECIO_PROVEEDOR</th>
                <th>ACCIÓN</th>
                
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
                <td><a class="btn btn-warning mx-2" href= inventario/editar  ><i class="fa fa-edit"></i></a><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></td>
				
                
               
            </tr>
            <tr>
                <td>Jena </td>
                <td>Gaines</td>
                <td>105855489</td>
                <td>cll 25 cr 45-6</td>
                <td>318525455</td>
                <td>jena@hotmail.com</td>
                <td><a class="btn btn-warning mx-2" href= inventario/editar  ><i class="fa fa-edit"></i></a><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></td>
				
                
              
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
                <th>ACCIÓN</th>
            </tr>
        </tfoot>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        $(document).ready(function() {
        $('#inventario').DataTable();
        });
    </script>
@stop