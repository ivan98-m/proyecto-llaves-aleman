@extends('adminlte::page')

@section('title', 'FACTURACION')

@section('content_header')
    <h1>FACTURACION</h1>
@stop

@section('content')
    <section class="row">
        <div class = "col">
            <div class ="card">
                <div class= "card-header">
                    <h2 class="card-title">cabecera de factura</h2>
                </div>
                <div class="card.body">
                    <form class= "row">
                        <div class="from-group col-xl-8">
                            <label for="">Nombre :</label>
                            <input type="text" class="from-control col-md-8 " placeholder="razon social" id="inputNombre" />
                        </div>
                        <div class="from-group">
                            <label for="">CC o Nit:</label>
                            <input type="text" class="from-control " placeholder="Nit" id="inputCc"/>
                        </div>
                         <div class="from-group col-md-3">
                            <label for="">Telefono:</label>
                            <input type="text" class="from-control " placeholder="telefono" id="inputTelefono"/>
                        </div>
                        <div class="from-group col-md-4">
                            <label for="">Direccion:</label>
                            <input type="text" class="from-control " placeholder="Direccion" id="inputDireccion"/>
                        </div>
                        <div class="from-group ">
                            <label for="">Fecha:</label>
                            <input type="date" class="from-control " id="inputfecha"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>   
    <section class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form class="row" id="formDetalle">
                        <div class="from-group col-md-2">
                            <label for=" "  >Cantidad</label>
                            <input type="number" class="from-control col-md-5" id="inputCantidad" />
                        </div>
                        <div class="from-group col-md-5">
                            <label for=" "  >Descripcion</label>
                            <input type="text" class="from-control col-md-8" id="inputDescripcion" />
                        </div>
                        <div class="from-group col-md-2">
                            <label for=" "  >P. Unitario</label>
                            <input type="number" class="from-control col-md-5" id="inputUnitario" />
                        </div>
                        <div class="from-group col-md-2">
                            <label for=" "  >P. Total</label>
                            <input type="number" class="from-control col-md-5" id="inputTotal" />
                        </div>
                        <div class="from-group col-md-1">
                            <button class="btn btn-primary border-0 " type="submit"> Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    <section class="row">
        <div class="col">
            <table class="table text-center">
                <thead>
                    <tr>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>P. Unitario</th>
                    <th>P. Total</th>
                    </tr>
                </thead>
            </table>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop