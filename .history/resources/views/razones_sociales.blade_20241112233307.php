@extends('layouts.app')

@section('title', 'Razones sociales')

@section('content')

<div class="container">
    <div class="col-14 ">
        <div class="panel " data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Razones</h4>
                <div class="panel-heading-btn">
                    <div class="btn-group my-n1">
                    <button href="#modal-agregar-razonSocial" type="button" data-bs-toggle="modal" class="btn btn-indigo btn-l">Nueva razon social</button>
                    <button type="button" class="btn btn-indigo btn-xs dropdown-toggle" data-bs-toggle="dropdown"><b class="caret"></b></button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="{{ route('nomina') }}" class="dropdown-item">Nominas</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <!-- Botón para abrir el modal de agregar proyecto -->

            <div class="table-responsive table-striped">
                <table id="data-table-buttons" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>RFC</th>
                            <th width="1%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($razonesSociales as $razonSocial)
                        <tr>
                            <td >{{ $loop->iteration }}</td>
                            <td >{{ $razonSocial->nombre }}</td>
                            <td >{{ $razonSocial->direccion }}</td>
                            <td >{{ $razonSocial->rfc}}</td>
                            <td nowrap>
                                <button class=" btn btn-sm btn-primary w-60px me-1" data-bs-toggle="modal" data-bs-target="#modal-editar-razonSocial-{{ $razonSocial->id }}">Edit</button>
                                <!-- Modal para eliminar razonSocial -->
                                <button class="btn btn-sm btn-white w-60px" data-bs-toggle="modal" data-bs-target="#modal-eliminar-razonSocial-{{ $razonSocial->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal para editar razonSocial -->
<div class="modal fade" id="modal-editar-razonSocial-{{ $razonSocial->id }}" tabindex="-1" aria-labelledby="modalLabelEditarrazonSocial" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h4 class="modal-title" id="modalLabelEditarrazonSocial">Editar razonSocial</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('razones.update', $razonSocial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $razonSocial->nombre }}" required>
                    </div>
                    <div class="col-5">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $razonSocial->direccion }}" required>
                    </div>
                    <div class="col-5">
                        <label for="rfc" class="form-label">RFC</label>
                        <input type="text" class="form-control uppercase-input" id="rfc" name="rfc" value="{{ $razonSocial->rfc }}" required maxlength="13">
                    </div>
                    <button type="submit" class="btn btn-primary" data-name="{{ $razonSocial->nombre }}">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para eliminar razonSocial -->
<div class="modal fade" id="modal-eliminar-razonSocial-{{ $razonSocial->id }}" tabindex="-1" aria-labelledby="modalLabelEliminarrazonSocial" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="modalLabelEliminarrazonSocial">Eliminar razonSocial</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar al razonSocial <strong>{{ $razonSocial->nombre }} {{ $razonSocial->direccion }} {{ $razonSocial->rfc }}</strong>?</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('razones.destroy', $razonSocial->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- modal principal agregar -->

<!-- Modal para agregar razonSocial -->
<div class="modal fade" id="modal-agregar-razonSocial" tabindex="-1" aria-labelledby="modalLabelAgregarrazonSocial" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title" id="modalLabelAgregarrazonSocial">Agregar Razon Social</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('razones.store') }}" method="POST" class="row g-3 align-items-center" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="col-6">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="col-6">
                        <label for="rfc" class="form-label">RFC</label>
                        <input type="text" class="form-control uppercase-input" id="rfc" name="rfc" required maxlength="13">
                    </div>

                    <!-- Nuevo select para Departamento -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@push('scripts')
<!-- Agregar JS específico para esta página -->

@endpush
