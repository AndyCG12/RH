@extends('layouts.app')
@section('title', 'Equipos Computo')
@section('content')

<div class="container">
    <div class="col-14 ">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white ">
                <h4 class="panel-title ">Equipos de Computo</h4>
                <div class="panel-heading-btn">
                    <button href="#addEquipoModal" class="btn btn-sm btn-indigo flex me-1" data-bs-toggle="modal">Agregar equipo</button>
                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive table-striped">
                <table id="data-table-buttons" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th class="text-nowrap">Nombre</th>
                                <th class="text-nowrap">Tipo</th>
                                <th class="text-nowrap">Cantidad Total</th>
                                <th class="text-nowrap">Cantidad Disponible</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipos as $equipo)
                            <tr>
                                <td >{{ $loop->iteration }}</td>
                                <td >{{ $equipo->nombre }}</td>
                                <td >{{ $equipo->tipo }}</td>
                                <td >{{ $equipo->cantidad_total }}</td>
                                <td >{{ $equipo->cantidad_disponible }}</td>
                                <td nowrap>
                                    <button class=" btn btn-sm btn-primary w-60px me-1" data-bs-toggle="modal" data-bs-target="#modal-editar-equipo-{{ $equipo->id }}">Edit</button>
                                    <!-- Modal para eliminar equipo -->
                                    <button class="btn btn-sm btn-white w-60px" data-bs-toggle="modal" data-bs-target="#modal-eliminar-equipo-{{ $equipo->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @foreach ($equipos as $equipo)
    <div class="modal fade" id="modal-editar-equipo-{{ $equipo->id }}" tabindex="-1"
        aria-labelledby="editarEquipoModalLabel-{{ $equipo->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('equipo.update', $equipo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title" id="editarEquipoModalLabel-{{ $equipo->id }}">Editar Equipo</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre-{{ $equipo->id }}" class="form-label">Nombre del Equipo</label>
                            <input type="text" class="form-control" id="nombre-{{ $equipo->id }}" name="nombre"
                                value="{{ $equipo->nombre }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo-{{ $equipo->id }}" class="form-label">Tipo de Equipo</label>
                            <select class="form-select" id="tipo-{{ $equipo->id }}" name="tipo" required>
                                <option value="Laptop" {{ $equipo->tipo == 'Laptop' ? 'selected' : '' }}>Laptop</option>
                                <option value="PC de Escritorio" {{ $equipo->tipo == 'PC de Escritorio' ? 'selected' : '' }}>PC de Escritorio</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad_total-{{ $equipo->id }}" class="form-label">Cantidad en Stock</label>
                            <input type="number" class="form-control" id="cantidad_total-{{ $equipo->id }}" name="cantidad_total"
                                value="{{ $equipo->cantidad_total }}" min="1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

@foreach ($equipos as $equipo)
    <div class="modal fade" id="modal-eliminar-equipo-{{ $equipo->id }}" tabindex="-1"
        aria-labelledby="eliminarEquipoModalLabel-{{ $equipo->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('equipo.destroy', $equipo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="eliminarEquipoModalLabel-{{ $equipo->id }}">Eliminar Equipo</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de que deseas eliminar el equipo <strong>{{ $equipo->nombre }}</strong>? Esta acción no se puede deshacer.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

    <!-- Tabla de equipos de cómputo disponibles -->


    <!-- Modal para asignar equipo -->
    <!-- Modal para agregar equipo -->
    <div class="modal fade" id="addEquipoModal" tabindex="-1" aria-labelledby="addEquipoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('equipo.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addEquipoModalLabel">Agregar Equipo de Cómputo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del Equipo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de Equipo</label>
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option value="Laptop">Laptop</option>
                                <option value="PC de Escritorio">PC de Escritorio</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad_total" class="form-label">Cantidad en Stock</label>
                            <input type="number" class="form-control" id="cantidad_total" name="cantidad_total" min="1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
