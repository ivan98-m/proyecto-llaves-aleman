<div class="modal fade text-left" id="trabajadores_edit{{ $trabajador->id_trabajador }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Editar Trabajador</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('trabajador.edit', $trabajador->id_trabajador) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row g-2 m-0">  
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Identificación:</label>
                            <input type="text" value="{{$trabajador->id_trabajador }}" class="form-control" id="id_trabajador" name="id_trabajador">
                        </div>
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Nombres:</label>
                            <input type="text" value="{{$trabajador->nombres}}"class="form-control" id="nombres" name="nombres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="text" value="{{$trabajador->apellidos }}"class="form-control" id="apellidos" name="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Especialidad:</label>
                        <input type="text" value="{{$trabajador->especialidad }}" class="form-control" id="especialidad" name="especialidad">
                    </div>
                    <div class="row g-2 m-0">
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label" >Dirección:</label>
                            <input type="text" value="{{$trabajador->direccion }}" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input type="text" value="{{$trabajador->celular }}" class="form-control" id="celular" name="celular">
                        </div>
                        <div class="col-4">
                            <label for="recipient-name" class="col-form-label">Correo:</label>
                            <input type="text" value="{{$trabajador->correo }}" class="form-control" id="correo" name="correo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Actualizar</button>
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        {{-- <a href= "{{ url()->previous() }}"  class="btn btn-info"><i class="fa fa-arrow-left"></i>Regresar</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
