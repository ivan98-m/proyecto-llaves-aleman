<div class="modal fade text-left" id="inventario_create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Agregar Producto</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('product.create') }}" method="POST">
                    @csrf
                    <div class="row g-2 m-0">  
                        {{-- @foreach ($proveedores as $proveedor)
                            {{$proveedor->nom_proveedor}}
                        @endforeach --}}
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Codigo Articulo:</label>
                            <input type="text" class="form-control" id="cod_articulo" name="cod_articulo">
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
                            <label for="recipient-name" class="col-form-label">Nombre Articulo:</label>
                            <input type="text" class="form-control" id="art_nombre" name="art_nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Foto articulo:</label>
                        <input type="text" class="form-control" id="art_foto" name="art_foto" placeholder="link">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="art_descripcion" name="art_descripcion">
                    </div>
                    <div class="row g-2 m-0">
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label" >Cantidad:</label>
                            <input type="number" value="0" class="form-control" id="stock" name="stock" placeholder="0" readonly>
                        </div>
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Valor Venta:</label>
                            <input type="number" class="form-control" id="p_venta" name="p_venta">
                        </div>
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Valor Proveedor:</label>
                            <input type="number" class="form-control" id="p_proveedor" name="p_proveedor">
                        </div>
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
