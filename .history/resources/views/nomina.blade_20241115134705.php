@extends('layouts.app')

@section('title', 'Nómina de Empleados')

@section('content')
<div class="container">
    <div class="col-14">
        <div class="panel" data-sortable-id="table-basic-7">
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Nómina de Empleados</h4>
                <div class="panel-heading-btn">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-agregar-nomina" class="btn btn-indigo">Agregar Nómina</button>
                </div>
            </div>

            <div class="table-responsive table-striped">
            <table id="data-table-buttons" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Empleado</th>
                            <th>Puesto</th>
                            <th>Salario</th>
                            <th width="1%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nominas as $nomina)
                        <tr>
                            <td >{{ $loop->iteration }}</td>
                            <td >{{ $nomina->empleado->nombre }}</td>
                            <td >{{ $nomina->puesto->nombre }}</td>
                            <td >{{ $nomina->salario }}</td>
                            <td nowrap>
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-editar-nomina-{{ $nomina->id }}">Edit</button>
                                <button class="btn btn-sm btn-white" data-bs-toggle="modal" data-bs-target="#modal-eliminar-nomina-{{ $nomina->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Agregar Nómina -->
<div class="modal fade" id="modal-agregar-nomina">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('nomina.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Nómina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <label>Empleado</label>
                    <select name="empleado_id" class="form-select">
                        @foreach($empleados as $empleado)
                            <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Puesto</label>
                    <select name="puesto_id" class="form-select">
                        @foreach($puestos as $puesto)
                            <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Salario</label>
                    <input type="number" name="salario" class="form-control" required>
                    <div class="form-group">
                        <label for="razon_social_id">Razón Social</label>
                        <select name="razon_social_id" id="razon_social_id" class="form-control">
                            <option value="">-- Sin razón social --</option>
                            @foreach($razonesSociales as $razonSocial)
                                <option value="{{ $razonSocial->id }}"
                                    {{ old('razon_social_id', $nomina->razon_social_id ?? '') == $razonSocial->id ? 'selected' : '' }}>
                                    {{ $razonSocial->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@foreach($nominas as $nomina)
<!-- Modal Editar Nómina -->
<div class="modal fade" id="modal-editar-nomina-{{ $nomina->id }}" tabindex="-1" aria-labelledby="modalEditarNominaLabel-{{ $nomina->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('nomina.update', $nomina->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarNominaLabel-{{ $nomina->id }}">Editar Nómina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="empleado_id" class="form-label">Empleado</label>
                        <select name="empleado_id" class="form-select" required>
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}" {{ $nomina->empleado_id == $empleado->id ? 'selected' : '' }}>{{ $empleado->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="puesto_id" class="form-label">Puesto</label>
                        <select name="puesto_id" class="form-select" required>
                            @foreach($puestos as $puesto)
                                <option value="{{ $puesto->id }}" {{ $nomina->puesto_id == $puesto->id ? 'selected' : '' }}>{{ $puesto->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad a Pagar</label>
                        <input type="number" name="cantidad" class="form-control" value="{{ $nomina->cantidad }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@foreach($nominas as $nomina)
<!-- Modal Eliminar Nómina -->
<div class="modal fade" id="modal-eliminar-nomina-{{ $nomina->id }}" tabindex="-1" aria-labelledby="modalEliminarNominaLabel-{{ $nomina->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('nomina.destroy', $nomina->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminarNominaLabel-{{ $nomina->id }}">Eliminar Nómina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro de que deseas eliminar la nómina de <strong>{{ $nomina->empleado->nombre }}</strong>?</p>
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

<!-- Modales para Editar y Eliminar aquí -->






@endsection
