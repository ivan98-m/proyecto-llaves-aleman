{{-- vista dashborad --}}
@extends('adminlte::page')

@section('title', 'CLIENTES')

@section('content_header')
    <h1>CLIENTES</h1>
@stop

@section('content')
<div class="dataTables_length" id="DataTables_Table_0_length">
    <label><font _mstmutation="1" _msthash="956683" _msttexthash="97786">
    Mostrar 
    </font><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="">
        <option value="10" _msthash="2020278" _msttexthash="9451">10
        </option><option value="25" _msthash="2020279" _msttexthash="10062">25
        </option><option value="50" _msthash="2020280" _msttexthash="9815">50
        </option><option value="100" _msthash="2020281" _msttexthash="15067">100
        </option></select><font _mstmutation="1" _msthash="956684" _msttexthash="115817"> entradas
    </font></label></div>
<div id="DataTables_Table_0_filter" class="dataTables_filter">
<label  _msthash="611858" _msttexthash="85956" >
    Buscar:
    <input type="search" class="" placeholder="" aria-controls="DataTables_Table_0" _istranslated="1" >
</label>
</div>

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
    <script> console.log('Hi!'); </script>
@stop