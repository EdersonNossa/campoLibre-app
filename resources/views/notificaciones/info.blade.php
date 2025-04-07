<!-- Button trigger modal -->


<!-- editar -->
<div class="modal fade" id="edit{{ $row->idnotificaciones }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar notificacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('notificaciones.update', $row->idnotificaciones) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Tipo</label>
                        <input type="text" class="form-control" name="tipo" id=""
                            aria-describedby="helpId" value="{{ $row->tipo }}" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">usuario</label>
                        <input type="text" class="form-control" name="usuario" id=""
                            aria-describedby="helpId" value="{{ $row->usuario }}" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">fecha</label>
                        <input type="date" class="form-control" name="fecha" id=""
                            aria-describedby="helpId" value="{{ $row->fecha }}" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">categoria</label>
                        <input type="text" class="form-control" name="categoria" id=""
                            aria-describedby="helpId" value="{{ $row->categoria }}" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id=""
                            aria-describedby="helpId" value="{{ $row->descripcion }}" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">estado</label>
                        <input type="text" class="form-control" name="estado" id=""
                            aria-describedby="helpId" value="{{ $row->estado }}" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>

            </form>
        </div>
    </div>
</div>
<!-- eliminar -->
<div class="modal fade" id="delete{{ $row->idnotificaciones }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar notificacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('notificaciones.destroy', $row->idnotificaciones) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <h2>estas seguro de elinimar{{$row->tipo}}</h2>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>

            </form>
        </div>
    </div>
</div>
