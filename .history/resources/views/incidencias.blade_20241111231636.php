@extends('layouts.app')

@section('title', 'Indic')
@section('content')
<div class="container">
    <!-- BEGIN col-6 -->
    <div class="col-14 ">
        <!-- BEGIN panel -->
        <div class="panel " data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Incidencias Laborales</h4>
                <div class="panel-heading-btn">
                        <button href="#modal-agregar-incidencia" type="button" data-bs-toggle="modal"class="btn btn-purple btn-l">Agregar Incidencia</button>
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
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Empleado</th>
                                <th>Estado</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($incidencias as $incidencia)
                            <tr>
                                <td >{{ $loop->iteration }}</td>
                                <td >{{ $incidencia->titulo }}</td>
                                <td >{{ $incidencia->descripcion }}</td>
                                <td >{{ $incidencia->empleado->nombre }}</td>
                                <td >{{ $incidencia->estado }}</td>
                                <td nowrap>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar-incidencia-{{ $incidencia->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar-incidencia-{{ $incidencia->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal para Agregar Incidencia -->
<div class="modal fade" id="modal-agregar-incidencia" tabindex="-1" aria-labelledby="modal-agregar-incidencia-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-agregar-incidencia-label">Agregar Incidencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('incidencia.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="empleado_id" class="form-label">Empleado</label>
                        <select class="form-select" id="empleado_id" name="empleado_id" required>
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
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

@foreach ($incidencias as $incidencia)
<!-- Modal para Editar Incidencia -->
<div class="modal fade" id="modal-editar-incidencia-{{ $incidencia->id }}" tabindex="-1" aria-labelledby="modal-editar-incidencia-{{ $incidencia->id }}-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-editar-incidencia-{{ $incidencia->id }}-label">Editar Incidencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('incidencia.update', $incidencia->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $incidencia->titulo }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $incidencia->descripcion }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="empleado_id" class="form-label">Empleado</label>
                        <select class="form-select" id="empleado_id" name="empleado_id" required>
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}" {{ $incidencia->empleado_id == $empleado->id ? 'selected' : '' }}>{{ $empleado->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="activo" {{ $incidencia->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ $incidencia->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
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

<!-- Modal para Eliminar Incidencia -->
<div class="modal fade" id="modal-eliminar-incidencia-{{ $incidencia->id }}" tabindex="-1" aria-labelledby="modal-eliminar-incidencia-{{ $incidencia->id }}-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-eliminar-incidencia-{{ $incidencia->id }}-label">Eliminar Incidencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar esta incidencia?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('incidencia.destroy', $incidencia->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection
<!-- Modal para Agregar Incidencia -->


