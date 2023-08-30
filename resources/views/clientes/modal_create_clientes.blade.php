<div class="modal fade text-left" id="modal_create_clientes" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Agregar Informacion Cliente</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('cliente.create') }}" method="POST">
                    @csrf
                    <div class="row g-2 m-0">
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Tipo de documento</label>
                            <select class="form-control" id="opc_documento" name="opc_documento" required>
                                <option value="CC">Cédula de Ciudadanía</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="RC">Registro Civil</option>
                                <option value="CE">Cédula de Extranjería</option>
                            </select>
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Nº</label>
                            <input type="number" class="form-control" id="documento_num" name="documento_num">
                        </div>
                    </div>
                    <div class="row g-2 m-0">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
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
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo:</label>
                        <input type="text" class="form-control" id="correo" name="correo">
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
