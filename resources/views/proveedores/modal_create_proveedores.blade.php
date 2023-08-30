<div class="modal fade text-left" id="modal_create_proveedores" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Agregar Informacion Proveedor</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('proveedores.create') }}" method="POST">
                    @csrf
                    
                    <div class="row g-2 m-0">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">id_proveedor:</label>
                            <input type="text" class="form-control" id="id_proveedor" name="id_proveedor">
                        </div>
                    
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                      
                    </div>
                    <div class="row g-2 m-0">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Direccion:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input type="text" class="form-control" id="celular" name="celular">
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
