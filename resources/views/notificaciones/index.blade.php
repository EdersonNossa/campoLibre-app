@extends('welcome')

@section('contenido')
    <div class="contenido">
        <div class="container my-5">
            <h1 class="text-center mb-4">Lista de notificaciones</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Tipo</th>
                            <th>Usuario</th>
                            <th>Fecha</th>
                            <th>Tienda/Evento</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Fila 1 -->
                        @foreach ($notificaciones as $row)
                        <tr>
                            <td id="tipopqrs">{{$row->idnotificaciones}}</td>
                            <td id="tipopqrs">{{$row->tipo}}</td>
                            <td id="tipopqrs">{{$row->usuario}}</td>
                            <td id="tipopqrs">{{$row->fecha}}</td>
                            <td id="tipopqrs">{{$row->categoria}}</td>
                            <td id="tipopqrs">{{$row->descripcion}}</td>
                            <td id="tipopqrs">{{$row->estado}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$row->idnotificaciones}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$row->idnotificaciones}}">
                                    Eliminar
                                </button>
                            </td>
                            
                        </tr>
                        @include('notificaciones.info')
                        @endforeach
                        
                    </tbody>
                    
                </table>
                
            </div>
            <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            
        </div>
        @include('notificaciones.create')
    </div>
@endsection
