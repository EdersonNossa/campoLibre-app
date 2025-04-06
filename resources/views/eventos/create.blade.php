<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Evento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('eventos.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id=""
                            aria-describedby="helpId" placeholder="nombre" />

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha" id=""
                            aria-describedby="helpId" placeholder="fecha" />

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">lugar</label>
                        <input type="text" class="form-control" name="lugar" id=""
                            aria-describedby="helpId" placeholder="lugar" />

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">hora</label>
                        <input type="time" class="form-control" name="hora" id=""
                            aria-describedby="helpId" placeholder="hora" />

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id=""
                            aria-describedby="helpId" placeholder="descripcion" />

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">estado</label>
                        <select name="estado" class="form-select mb-3">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>                 
                        </select>


                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guargar</button>
            </div>
            </form>

        </div>
    </div>
</div>
