<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar notificacion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('notificaciones.store')}}" method="post">
            @csrf
              <div class="mb-3">
                <label for="" class="form-label">Tipo</label>
                <input
                  type="text"
                  class="form-control"
                  name="tipo"
                  id=""
                  aria-describedby="helpId"
                  placeholder="tipo de notificacion"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">usuario</label>
                <input
                  type="text"
                  class="form-control"
                  name="usuario"
                  id=""
                  aria-describedby="helpId"
                  placeholder="usuario"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">fecha</label>
                <input
                  type="date"
                  class="form-control"
                  name="fecha"
                  id=""
                  aria-describedby="helpId"
                  placeholder="fecha de notificacion"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">categoria</label>
                <input
                  type="text"
                  class="form-control"
                  name="categoria"
                  id=""
                  aria-describedby="helpId"
                  placeholder="Evento/Tienda"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">descripcion</label>
                <input
                  type="text"
                  class="form-control"
                  name="descripcion"
                  id=""
                  aria-describedby="helpId"
                  placeholder="descripcion"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">estado</label>
                <input
                  type="text"
                  class="form-control"
                  name="estado"
                  id=""
                  aria-describedby="helpId"
                  placeholder="estado"
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        
        </form>
      </div>
    </div>
  </div>