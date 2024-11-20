@extends('layouts.app')

@section('title', 'Compras')

@section('content')
<div class="container">
    <!-- BEGIN col-6 -->
    <div class="col-14 ">
        <!-- BEGIN panel -->
        <div class="panel " data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Compras</h4>
                <div class="panel-heading-btn">
                        <button href="#modal-agregar-compra" type="button" data-bs-toggle="modal"class="btn btn-purple btn-l">Nueva Compra</button>
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
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Empleado</th>
                                <th>Estado</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($compras as $compra)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $compra->nombre }}</td>
                                <td>{{ $compra->descripcion }}</td>
                                <td>{{ $compra->cantidad }}</td>
                                <td>{{ '$' . number_format($compra->precio,2) }}</td>
                                <td>{{ $compra->empleado->nombre }}</td>
                                <td>{{ ucfirst($compra->estado) }}</td>
                                <td nowrap>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar-compra-{{ $compra->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar-compra-{{ $compra->id }}">
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

<!-- Modal para Agregar compra -->
<div class="modal fade" id="modal-agregar-compra" tabindex="-1" aria-labelledby="modal-agregar-compra-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-agregar-compra-label">Agregar compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('compra.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Compra</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control"  required>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" id="precio" name="precio" class="form-control" rows="3" min="0" required>
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

                        <input type="date" class="form-control" id="estado" name="estado" required>
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="aprovado">{} ucfirst('Aprovado')</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="cancelado">Cancelado</option>
                            <option value="comprado">Comprado</option>
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

@foreach ($compras as $compra)
<!-- Modal para Editar compra -->
<div class="modal fade" id="modal-editar-compra-{{ $compra->id }}" tabindex="-1" aria-labelledby="modal-editar-compra-{{ $compra->id }}-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-editar-compra-{{ $compra->id }}-label">Editar compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('compra.update', $compra->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Compra</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $compra->nombre }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion"  required value="{{ $compra->descripcion }}"</input>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad"  required value="{{ $compra->cantidad }}"</input>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" rows="3" min="0" required value="{{ $compra->precio }}"</input>
                    </div>
                    <div class="mb-3">
                        <label for="empleado_id" class="form-label">Empleado</label>
                        <select class="form-select" id="empleado_id" name="empleado_id" required>
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}" {{ $compra->empleado_id == $empleado->id ? 'selected' : '' }}>{{ $empleado->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="aprovado" {{ $compra->estado == 'aprovado' ? 'selected' : '' }}>Aprovado</option>
                            <option value="pendiente" {{ $compra->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                            <option value="cancelado" {{ $compra->estado == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                            <option value="comprado" {{ $compra->estado == 'comprado' ? 'selected' : '' }}>Comprado</option>
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

<!-- Modal para Eliminar compra -->
<div class="modal fade" id="modal-eliminar-compra-{{ $compra->id }}" tabindex="-1" aria-labelledby="modal-eliminar-compra-{{ $compra->id }}-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-eliminar-compra-{{ $compra->id }}-label">Eliminar compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar esta compra?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('compra.destroy', $compra->id) }}" method="POST" style="display: inline-block;">
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
<!-- Modal para Agregar compra -->
