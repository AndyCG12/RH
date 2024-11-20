@extends('layouts.app')

@section('title', 'Departamentos')

@section('content')
<div class="container">
    <div class="col-14 ">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white ">
                <h4 class="panel-title ">Departamentos</h4>
                <div class="panel-heading-btn">
                    <button href="#modal-agregar" class="btn btn-sm btn-indigo flex me-1" data-bs-toggle="modal">Agregar departamento</button>
                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive table-striped">
                    <table id="data-table-buttons" class="table table-striped mb-4 align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($departamentos) > 0)
                            @foreach ($departamentos as $departamento)
                            <tr>
                                <td>{{ $loop-> }}</td>
                                <td>{{ $departamento->nombre }}</td>
                                <td>{{ $departamento->descripcion }}</td>
                                <td nowrap>
                                    <button data-bs-toggle="modal" data-bs-target="#modal-editar-{{ $departamento->id }}" class="btn btn-sm btn-primary w-60px me-1">Edit</button>
                                    <button class="btn btn-sm btn-white w-60px me-1" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{ $departamento->id }}">Eliminar</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4" class="text-center">No hay departamentos registrados.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Editar -->
</div>
@foreach ($departamentos as $departamento)
<div class="modal fade" id="modal-editar-{{ $departamento->id }}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Departamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('departamentos.update', $departamento->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $departamento->nombre }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion">{{ $departamento->descripcion }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Eliminar -->
<div class="modal fade" id="modal-eliminar-{{ $departamento->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Departamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar el departamento <strong>{{ $departamento->nombre }}</strong>?
            </div>
            <div class="modal-footer">
                <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST">
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
                <h5 class="modal-title">Agregar Departamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('departamentos.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
