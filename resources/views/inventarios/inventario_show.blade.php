<div class="modal fade text-left" id="inventario_show{{ $articulo->cod_articulo }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Informacion Producto</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5">
                        <p class="lh-sm fs-5"><b>{{ $articulo->art_nombre }} </b></p>
                        <img src="{{ $articulo->art_foto }}" style="height:200px" />
                    </div>
                    <div class="col-sm-7">
                        <p class="lh-sm fs-5"><b>Descripcion: </b>{{ $articulo->art_descripcion }}</p>
                        <p class="lh-sm fs-5"><b>Proveedor: </b>{{ $nom_proveedor }}</p>
                        <p class="lh-sm fs-5"><b>Cantidad: </b>{{ $articulo->stock }}</p>
                        <p class="lh-sm fs-5"><b>Precio und: </b>{{ $articulo->p_venta }}</p>
                    </div>
                </div>
                {{-- <div class="form-group m-0">
                    <label for="recipient-name" class="col-form-label">Nombre Articulo:</label>
                    <input type="text" value="{{ $articulo->art_nombre }}" class="form-control" id="identificacion"
                        name="identificacion">
                </div> --}}
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    {{-- <a href= "{{ url()->previous() }}"  class="btn btn-info"><i class="fa fa-arrow-left"></i>Regresar</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
