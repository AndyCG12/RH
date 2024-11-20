<!-- resources/views/asignar_equipo.blade.php -->
@extends('layouts.app')

@section('title', 'Asignación de equipos')

@section('content')
<div class="container">
    <div class="col-14">
        <div class="panel panel-inverse" data-sortable-id="table-basic-7">
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Asignaciones de Equipos a Empleados</h4>
                <div class="panel-heading-btn">
                    <div class="btn-group my-n1">
                        <button class="btn btn-sm btn-indigo flex me-1" data-bs-toggle="modal" data-bs-target="#addAsignacionModal">Asignar Equipo</button>
                        <button type="button" class="btn btn-indigo btn-xs dropdown-toggle" data-bs-toggle="dropdown"><b class="caret"></b></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ route('equipos') }}" class="dropdown-item">Nuevo equipo de computo</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive table-striped">
                <table id="data-table-buttons" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th width="1%">Empleado Foto</th>
                                <th class="text-nowrap">Empleado</th>
                                <th class="text-nowrap">Equipo</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($asignaciones as $asignacion)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td >
                                    @if ($asignacion->empleado->imagen)
                                        <img src="{{ asset('storage/' . $asignacion->empleado->imagen) }}" alt="Imagen de {{ $asignacion->empleado->nombre }}" class="rounded h-50px">
                                    @else
                                        <span>No imagen</span>
                                    @endif
                                </td>
                                <td >{{ $asignacion->empleado->nombre }} {{ $asignacion->empleado->apellidoP }} {{ $asignacion->empleado->apellidoM }}</td>
                                <td >{{ $asignacion->equipo->nombre }}</td>
                                <td >
                                    <button class="btn btn-sm btn-primary w-60px me-1" data-bs-toggle="modal" data-bs-target="#editAsignacionModal-{{ $asignacion->id }}">Edit</button>
                                    <button class="btn btn-sm btn-white w-60px" data-bs-toggle="modal" data-bs-target="#deleteAsignacionModal-{{ $asignacion->id }}">Delete</button>
                                </td>
                            </tr>

                            <!-- Modal para Editar Asignación -->
                            <div class="modal fade" id="editAsignacionModal-{{ $asignacion->id }}" tabindex="-1" aria-labelledby="editAsignacionModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('asignaciones.update', $asignacion->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Editar Asignación</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Empleado</label>
                                                    <select name="empleado_id" class="form-control">
                                                        @foreach($empleados as $empleado)
                                                        <option value="{{ $empleado->id }}" {{ $empleado->id == $asignacion->empleado_id ? 'selected' : '' }}>{{ $empleado->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Equipo</label>
                                                    <select name="equipo_id" class="form-control">
                                                        @foreach($equipos as $equipo)
                                                        <option value="{{ $equipo->id }}" {{ $equipo->id == $asignacion->equipo_id ? 'selected' : '' }}>{{ $equipo->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Modal para Confirmar Eliminación de Asignación -->
                            <div class="modal fade" id="deleteAsignacionModal-{{ $asignacion->id }}" tabindex="-1" aria-labelledby="deleteAsignacionModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('asignaciones.destroy', $asignacion->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirmar Eliminación</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Estás seguro de que deseas eliminar esta asignación de equipo a empleado?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Agregar Asignación -->
    <div class="modal fade" id="addAsignacionModal" tabindex="-1" aria-labelledby="addAsignacionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('asignaciones.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Asignar Equipo a Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Empleado</label>
                            <select name="empleado_id" class="form-control">
                                @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Equipo</label>
                            <select name="equipo_id" class="form-control">
                                @foreach($equipos as $equipo)
                                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Asignar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
