<!-- Button trigger modal -->


<!-- Modal Edit -->
<div class="modal fade" id="edit{{$row->idevento}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Evento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('eventos.update',$row->idevento)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombre"
                            id=""
                            aria-describedby="helpId"
                            value="{{$row->nomevento}}"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha</label>
                        <input
                            type="date"
                            class="form-control"
                            name="fecha"
                            id=""
                            aria-describedby="helpId"
                            value="{{$row->fecevento}}"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">lugar</label>
                        <input
                            type="text"
                            class="form-control"
                            name="lugar"
                            id=""
                            aria-describedby="helpId"
                            value="{{$row->lugevento}}"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">hora</label>
                        <input
                            type="time"
                            class="form-control"
                            name="hora"
                            id=""
                            aria-describedby="helpId"
                            value="{{$row->horevento}}"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">descripcion</label>
                        <input
                            type="text"
                            class="form-control"
                            name="descripcion"
                            id=""
                            aria-describedby="helpId"
                            value="{{$row->descevento}}"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">estado</label>
                        <input
                            type="text"
                            class="form-control"
                            name="estado"
                            id=""
                            aria-describedby="helpId"
                            value="{{$row->estevento}}"
                        />
                        
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">actualizar</button>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- Modal delete -->
<div class="modal fade" id="delete{{$row->idevento}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Evento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('eventos.destroy',$row->idevento)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <h2>estas seguro de eliminar {{$row->nomevento}}</h2>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
            </form>

        </div>
    </div>
</div>
