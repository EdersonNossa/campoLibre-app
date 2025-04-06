@extends('welcome')

@section('content')
    <div class="contenido">
        <div class="container my-5">
            <h1 class="text-center mb-4">Lista de Eventos</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Lugar</th>
                            <th>hora</th>
                            <th>descripcion</th>
                            <th>estado</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- Fila 1 -->
                        @foreach ($eventos as $row)
                            <tr>
                                <td id="idevento">{{ $row->idevento }}</td>
                                <td id="nomevento">{{ $row->nomevento }}</td>
                                <td id="fecevento">{{ $row->fecevento }}</td>
                                <td id="lugevento">{{ $row->lugevento }}</td>
                                <td id="horevento">{{ $row->horevento }}</td>
                    
                                <td id="descevento">{{ $row->descevento }}</td>
                                <td id="estevento">{{ $row->estevento }}</td>
                                <td id="estevento">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$row->idevento}}">
                                        editar
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$row->idevento}}">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @include('Eventos.info')
                        @endforeach

                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>

        </div>
    </div>
    @include('Eventos.create')
@endsection
