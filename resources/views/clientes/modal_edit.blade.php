<form action="#" method="post">
    <div class="modal fade text-left" id="modal_edit{{$cliente->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Informacion Cliente</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-0">
                        <label for="recipient-name" class="col-form-label">Identificacíon:</label>
                        <input type="text" value="{{$cliente->indentificacion}}" class="form-control" id="identificacion">
                    </div>
                    <div class="row g-2 m-0">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" value="{{$cliente->nombre}}" class="form-control" id="nombre">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="text"  value="{{$cliente->apellidos}}" class="form-control" id="apellidos">
                        </div>
                    </div>
                    <div class="row g-2 m-0">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Direccion:</label>
                            <input type="text" value="{{$cliente->direccion}}" class="form-control" id="direccion">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                        <input type="text"  value="{{$cliente->celular}}" class="form-control" id="apellidos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo:</label>
                        <input type="text" value="{{$cliente->correo}}" class="form-control" id="correo">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Actualizar</button>
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                                {{-- <a href= "{{ url()->previous() }}"  class="btn btn-info"><i class="fa fa-arrow-left"></i>Regresar</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>