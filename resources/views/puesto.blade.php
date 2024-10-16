@extends('layouts.app')

@section('title', 'Puestos')

@section('content')
<div class="container">
    <div class="col-14">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Puestos</h4>
                <div class="panel-heading-btn">
                    <button href="#modal-agregar" class="btn btn-sm btn-indigo flex me-1" data-bs-toggle="modal">Agregar Puesto</button>
                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive table-striped">
                    <table id="data-table-buttons" class="table table-striped mb-4 align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th width="1%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($puestos as $puesto)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $puesto->nombre }}</td>
                                <td nowrap>
                                    <button data-bs-toggle="modal" data-bs-target="#modal-editar-{{ $puesto->id }}" class="btn btn-sm btn-primary w-60px me-1">Editar</button>
                                    <button data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{ $puesto->id }}" class="btn btn-sm btn-white w-60px me-1">Eliminar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END table-responsive -->
            </div>
            <!-- END panel-body -->
        </div>
        <!-- END panel -->
    </div>

    <!-- Modales Editar y Eliminar -->
    @foreach ($puestos as $puesto)
    <!-- Modal Editar -->
    <div class="modal fade" id="modal-editar-{{ $puesto->id }}" tabindex="-1" aria-labelledby="modalEditarLabel-{{ $puesto->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Puesto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('puesto.update', $puesto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombre-{{ $puesto->id }}" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre-{{ $puesto->id }}" name="nombre" value="{{ $puesto->nombre }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Eliminar -->
    <div class="modal fade" id="modal-eliminar-{{ $puesto->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel-{{ $puesto->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Puesto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar el puesto <strong>{{ $puesto->nombre }}</strong>?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('puesto.destroy', $puesto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Modal Agregar -->
    <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Puesto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('puesto.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
