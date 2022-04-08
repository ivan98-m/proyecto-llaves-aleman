@extends('master')

@section('title', 'FACTURACION>COMPRAS')

@section('plugins.Datatables' , true)

@section('content_header')
    <h1>FACTURACION COMPRAS</h1>
@stop

@section('content')
<div class="border border-dark p-2 m-1 rounded">
    <form action="{{ route('compra.create') }}">
        @csrf
        <div class="row">  
            <div class="col-4">
                <label for="recipient-name" class="col-form-label">Proveedor</label>
                <select class="form-control" id="id_proveedor" name="id_proveedor" required>
                    @foreach ($proveedores as $proveedor)
                        <option value="{{$proveedor->id_proveedor}}">{{$proveedor->nom_proveedor}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="recipient-name" class="col-form-label">Fecha</label>
                <input type="text" class="form-control" id="fecha" name="fecha" placeholder="{{$fechaActual =  date("Y-m-d h:i:s")}}">
            </div>
            <div class="col-4">
                <label for="recipient-name" class="col-form-label">Total</label>
                <input type="number" value="0" class="form-control" id="total" name="total" placeholder="0" readonly>
            </div>
        </div>
        <div class="d-flex flex-row-reverse mt-2">
            <button class="btn btn btn-success">
                <i class="fa fa-plus-circle"></i>Agregar
            </button>
        </div>
    </form>
</div>
<div class="border border-dark p-2 m-1 rounded">
    <table id="no" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO FACTURA</th>
                <th>PROVEEDOR</th>
                <th>FECHA</th>
                <th>TOTAL</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
                <tr>
                    <td>{{ $compra->cod_factura }}</td>
                    <td>
                        @foreach ($proveedores as $proveedor)
                            @if ($proveedor->id_proveedor == $compra->id_proveedor)
                                {{$proveedor->nom_proveedor}}
                                @break
                            @endif   
                        @endforeach
                    </td>
                    <td>{{ $compra->fecha }}</td>
                    <td>{{ $compra->total }}</td>
                    <td>
                        <a href="{{url('dashboard/facturacion/compras/detalle', $compra->cod_factura)}}">
                            <button class="btn btn-warning p-1"><i class="fa fa-plus-circle"></i></button>
                        </a>
                        <form method="POST" action="{{ route('compra.delete', $compra->cod_factura) }}" style="display:inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit"  class="btn btn-danger show_confirm p-1"><i class="fa fa-trash"></i></button>
                            {{-- <a  type="submit" class="btn btn-danger p-1" href=""><i class="fa fa-trash"></i></a> --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>CODIGO FACTURA</th>
                <th>PROVEEDOR</th>
                <th>FECHA</th>
                <th>TOTAL</th>
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
            $('#no').DataTable();
        });
    </script>
@stop