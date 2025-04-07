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
                                <td id="">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $row->idevento }}">
                                        editar
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $row->idevento }}">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @include('Eventos.info')
                        @endforeach

                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>
            <div class="container mt-4">
                <h2 class="text-center mb-4">Filtrar Eventos</h2>
                <form method="GET" action="{{ route('eventos.index') }}" class="d-block w-100">

                    <!-- Filtrar por ID -->
                    <input type="number" name="idevento" placeholder="Buscar por ID" value="{{ request('idevento') }}"
                        class="form-control mb-3">

                    <!-- Filtrar por Nombre -->
                    <input type="text" name="nomevento" placeholder="Buscar por Nombre"
                        value="{{ request('nomevento') }}" class="form-control mb-3">

                    <!-- Filtrar por Estado -->
                    <select name="estevento" class="form-select mb-3">
                        <option value="">Todos los estados</option>
                        <option value="activo" {{ request('estevento') == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ request('estevento') == 'inactivo' ? 'selected' : '' }}>Inactivo
                        </option>
                    </select>

                    <!-- Filtrar por Fecha Específica -->
                    <label>Fecha:</label>
                    <input type="date" name="fecevento" value="{{ request('fecevento') }}" class="form-control mb-3">



                    <!-- Botón para filtrar -->
                    <button type="submit" class="btn btn-primary">Filtrar</button>

                    <!-- Botón para limpiar filtros -->
                    <a href="{{ route('eventos.index') }}" class="btn btn-secondary">Limpiar filtros</a>






                </form>
            </div>
        </div>
    </div>
    @include('Eventos.create')
@endsection
