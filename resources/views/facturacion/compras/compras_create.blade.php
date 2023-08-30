<div class="modal fade text-left" id="compras_create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Agregar Compra</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- @foreach($proveedores as $proveedor)
            {{ $proveedor='holaaa'}}
            @endforeach --}}
            <div class="modal-body">
                <form action="{{ route('compra.create') }}" method="POST">
                    @csrf
                    <div class="row g-2 m-0">  
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Código:</label>
                            <input type="text" class="form-control" id="cod_factura" name="cod_factura">
                        </div>
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Proveedor</label>
                            <select class="form-control" id="id_proveedor" name="id_proveedor" required readonly>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{$proveedor->id_proveedor}}">{{$proveedor->nom_proveedor}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Fecha:</label>
                            <input type="date" class="from-control " id="fecha" name="fecha"/>
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="recipient-name" class="col-form-label">Total:</label>
                        <input type="number" class="form-control" id="total" name="total">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Agregar</button>
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        {{-- <a href= "{{ url()->previous() }}"  class="btn btn-info"><i class="fa fa-arrow-left"></i>Regresar</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
