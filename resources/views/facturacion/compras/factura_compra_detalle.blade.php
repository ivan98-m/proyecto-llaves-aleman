@extends('master')

@section('title', 'FACTURACION>COMPRAS')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>FACTURACION COMPRAS DETALLE</h1>
@stop

@section('content')
    <div class="border border-dark p-2 rounded">
        <h3>Factura compra Nº{{ $compra->cod_factura }}</h3>
        <form action="{{ route('facturadeta.create') }}" method="POST">
            <div class="row">
                <div class="col-4">
                    <label for="recipient-name" class="col-form-label">Proveedor</label>
                    @foreach ($proveedores as $proveedor)
                        @if ($proveedor->id_proveedor == $compra->id_proveedor)
                            <input type="text" value=" {{ $proveedor->nom_proveedor }}" class="form-control"
                                id="id_proveedor" name="id_proveedor">
                        @break
                    @endif
                    @endforeach
                </div>
                <div class="col-4">
                    <label for="recipient-name" class="col-form-label">Producto</label>
                    <select class="form-control" id="cod_articulo" name="cod_articulo" required>
                        @foreach ($productos as $producto)
                            <option value="{{ $producto->cod_articulo }}">{{ $producto->art_nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <label for="recipient-name" class="col-form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="recipient-name" class="col-form-label">Valor Venta:</label>
                    <input type="number" class="form-control" id="sub_total" name="sub_total">
                </div>
                <div class="col-4">
                    <div class="d-flex flex-row-reverse mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-info m-3"><i class="fa fa-arrow-left"></i>Regresar</a>
                        <button class="btn btn btn-success m-3">
                            <i class="fa fa-plus-circle"></i>Agregar
                        </button>
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </div>
    <div class="border border-dark p-2 mt-2 rounded">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>CODIGO ARTICULO</th>
                    <th>VALOR/u</th>
                    <th>CANTIDAD</th>
                    <th>SUBTOTAL</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compra_detalles as $compra_detalle)
                    <tr>
                        <td>{{ $compra_detalle->cod_articulo }}</td>
                        <td>0</td>
                        <td>{{ $compra_detalle->cantidad }}</td>
                        <td>{{ $compra_detalle->subtotal }}</td>
                        <td>
                            <form method="POST" action="" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="btn btn-danger show_confirm p-1"><i class="fa fa-trash"></i></button>
                                {{-- <a  type="submit" class="btn btn-danger p-1" href=""><i class="fa fa-trash"></i></a> --}}
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
@stop
