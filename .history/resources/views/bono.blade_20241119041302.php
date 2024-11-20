@extends('layouts.app')

@section('title', 'Bonos')

@section('content')
<div class="container">
    <!-- BEGIN col-6 -->
    <div class="col-14 ">
        <!-- BEGIN panel -->
        <div class="panel " data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Bono</h4>
                <div class="panel-heading-btn">
                        <button href="#modal-agregar-bono" type="button" data-bs-toggle="modal"class="btn btn-purple btn-l">Agregar bono</button>
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
                                <th>Nombre</th>
                                <th>Monto</th>
                                <th>Empleado</th>
                                <th>Fecha</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bonos as $bono)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bono->nombre }}</td>
                                <td>{{ '$' . number_format($bono->monto, 2) }}</td>
                                <td>{{ $bono->empleado->nombre }}</td>
                                <td>{{ $bono->fecha }}</td>
                                <td nowrap>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar-bono-{{ $bono->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar-bono-{{ $bono->id }}">
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

<!-- Modal para Agregar bono -->
<div class="modal fade" id="modal-agregar-bono" tabindex="-1" aria-labelledby="modal-agregar-bono-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-agregar-bono-label">Agregar bono</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('bono.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Bono</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="monto" class="form-label">Monto</label>
                        <input type="number" id="monto" name="monto" class="form-control" rows="3" required>
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
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
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

@foreach ($bonos as $bono)
<!-- Modal para Editar bono -->
<div class="modal fade" id="modal-editar-bono-{{ $bono->id }}" tabindex="-1" aria-labelledby="modal-editar-bono-{{ $bono->id }}-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-editar-bono-{{ $bono->id }}-label">Editar bono</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('bono.update', $bono->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Bono</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $bono->nombre }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="monto" class="form-label">Monto</label>
                        <input type="number" class="form-control" id="monto" name="monto" rows="3" required value="{{ $bono->monto }}"</input>
                    </div>
                    <div class="mb-3">
                        <label for="empleado_id" class="form-label">Empleado</label>
                        <select class="form-select" id="empleado_id" name="empleado_id" required>
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}" {{ $bono->empleado_id == $empleado->id ? 'selected' : '' }}>{{ $empleado->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required value="{{$bono->fecha}}" >
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

<!-- Modal para Eliminar bono -->
<div class="modal fade" id="modal-eliminar-bono-{{ $bono->id }}" tabindex="-1" aria-labelledby="modal-eliminar-bono-{{ $bono->id }}-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-eliminar-bono-{{ $bono->id }}-label">Eliminar bono</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar <strong>{{ $bono->nombre}}</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('bono.destroy', $bono->id) }}" method="POST" style="display: inline-block;">
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
<!-- Modal para Agregar bono -->