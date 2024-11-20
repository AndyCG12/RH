@extends('layouts.app')

@section('title', 'Lista de Empleados')

@section('content')
<div class="container">
    <!-- BEGIN col-6 -->
    <div class="col-14 ">
        <!-- BEGIN panel -->
        <div class="panel " data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Lista de empleados</h4>
                <div class="panel-heading-btn">
                    <div class="btn-group my-n1">
                        <button href="#modal-agregar-empleado" type="button" data-bs-toggle="modal"class="btn btn-purple btn-l">Agregar Empleado</button>
                        <button type="button" class="btn btn-purple btn-xs dropdown-toggle" data-bs-toggle="dropdown"><b class="caret"></b></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ route('departamentos') }}" class="dropdown-item">Departamentos</a>
                            <a href="{{ route('puestos') }}" class="dropdown-item">Puestos</a>
                            <a href="{{ route('asignar') }}" class="dropdown-item">Computo</a>

                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

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
                                <th width="1%">Foto</th>
                                <th class="text-nowrap">Nombre</th>
                                <th class="text-nowrap">Apellidos</th>
                                <th class="text-nowrap">Departamentos</th>
                                <th class="text-nowrap">Puesto</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Teléfono</th>
                                <!-- Modal para editar empleado -->
                                <th class="text-nowrap">Fecha Naciemiento</th>
                                <th class="text-nowrap">Fecha Contratación</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                            <tr>
                                <td >{{ $loop->iteration }}</td>
                                <td>
                                    @if($empleado->imagen)
                                    <img src="{{ asset('storage/' . $empleado->imagen) }}" alt="Imagen de {{ $empleado->nombre }}" class="rounded h-50px"">
                                    @else
                                    <span>No imagen</span>
                                    @endif
                                </td>
                                <td>{{ $empleado->nombre }}</td>
                                <td>{{ $empleado->apellidoP }} {{ $empleado->apellidoM }}</td>
                                <td>{{$empleado->departamento->nombre}}</td>
                                <td>{{$empleado->puesto->nombre}}</td>
                                <td>{{ $empleado->email }}</td>

                                <td>{{ $empleado->telefono }}</td>

                                <td>{{ $empleado->rfc }}</td>
                                <td>{{ $empleado->fecha_nacimiento->format('d/m/Y') }}</td>
                                <td>{{ $empleado->fecha_contratacion->format('d/m/Y') }}</td>
                                <td nowrap>
                                    <button class=" btn btn-sm btn-primary w-60px me-1" data-bs-toggle="modal" data-bs-target="#modal-editar-empleado-{{ $empleado->id }}">Edit</button>
                                    <!-- Modal para eliminar empleado -->
                                    <button class="btn btn-sm btn-white w-60px" data-bs-toggle="modal" data-bs-target="#modal-eliminar-empleado-{{ $empleado->id }}">Delete</button>
                                </td>
                            </tr>
                            <!-- Modal para editar empleado -->
                            <div class="modal fade" id="modal-editar-empleado-{{ $empleado->id }}" tabindex="-1" aria-labelledby="modalLabelEditarEmpleado" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning text-white">
                                            <h4 class="modal-title" id="modalLabelEditarEmpleado">Editar Empleado</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('empleados.update', $empleado->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="nombre" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
                                                </div>
                                                <div class="col-5">
                                                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                                                    <input type="text" class="form-control" id="apellidoP" name="apellidoP" value="{{ $empleado->apellidoP }}" required>
                                                </div>
                                                <div class="col-5">
                                                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                                                    <input type="text" class="form-control" id="apellidoM" name="apellidoM" value="{{ $empleado->apellidoM }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="departamento" class="form-label">Departamento</label>
                                                    <select class="form-select select2" id="departamento" name="departamento_id" required>
                                                        @foreach($departamentos as $departamento)
                                                        <option value="{{ $departamento->id }}" {{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}>{{ $departamento->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Select para Puesto -->
                                                <div class="mb-3">
                                                    <label for="puesto" class="form-label">Puesto</label>
                                                    <select class="form-select select2" id="puesto" name="puesto_id" required>
                                                        @foreach($puestos as $puesto)
                                                        <option value="{{ $puesto->id }}" {{ $empleado->puesto_id == $puesto->id ? 'selected' : '' }}>{{ $puesto->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{ $empleado->email }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telefono" class="form-label">Teléfono</label>
                                                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $empleado->telefono }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="rfc" class="form-label">RFC</label>
                                                    <input type="text" class="form-control uppercase-input" id="rfc" name="rfc" value="{{ $empleado->rfc }}" required maxlength="13">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $empleado->fecha_nacimiento->format('Y-m-d') }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="fecha_contratacion" class="form-label">Fecha de Contratación</label>
                                                    <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" value="{{ $empleado->fecha_contratacion->format('Y-m-d') }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="imagen" class="form-label">Foto</label>
                                                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                                                </div>
                                                <button type="submit" class="btn btn-primary" data-name="{{ $empleado->nombre }}">Actualizar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal para eliminar empleado -->
                            <div class="modal fade" id="modal-eliminar-empleado-{{ $empleado->id }}" tabindex="-1" aria-labelledby="modalLabelEliminarEmpleado" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h4 class="modal-title" id="modalLabelEliminarEmpleado">Eliminar Empleado</h4>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Estás seguro de que deseas eliminar al empleado <strong>{{ $empleado->nombre }} {{ $empleado->apellidoP }} {{ $empleado->apellidoM }}</strong>?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- modal principal agregar -->

    <!-- Modal para agregar empleado -->
    <div class="modal fade" id="modal-agregar-empleado" tabindex="-1" aria-labelledby="modalLabelAgregarEmpleado" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title" id="modalLabelAgregarEmpleado">Agregar Empleado</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('empleados.store') }}" method="POST" class="row g-3 align-items-center" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="col-6">
                            <label for="apellidoP" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoP" name="apellidoP" required>
                        </div>
                        <div class="col-6">
                            <label for="apellidoM" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoM" name="apellidoM" required>
                        </div>

                        <!-- Nuevo select para Departamento -->
                        <div class="mb-3">
                            <label for="departamento" class="form-label">Departamento</label>
                            <select class="form-select select2" id="departamento" name="departamento_id" required>
                                <option value="">Seleccione un departamento</option>
                                @foreach($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nuevo select para Puesto -->
                        <div class="mb-3">
                            <label for="puesto" class="form-label">Puesto</label>
                            <select class="form-select select2" id="puesto" name="puesto_id" required>
                                <option value="">Seleccione un puesto</option>
                                @foreach($puestos as $puesto)
                                <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="rfc" class="form-label">RFC</label>
                            <input type="text" class="form-control uppercase-input" id="rfc" name="rfc" required maxlength="13">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_contratacion" class="form-label">Fecha de Contratación</label>
                            <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" required>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar Empleado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" id="modal-agregar-empleado" tabindex="-1" aria-labelledby="modalLabelAgregarEmpleado" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabelAgregarEmpleado">Agregar Empleado</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('empleados.store') }}" method="POST" class="row g-3 align-items-center" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="col-6">
                            <label for="apellidoP" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoP" name="apellidoP" required>
                        </div>
                        <div class="col-6">
                            <label for="apellidoM" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoM" name="apellidoM" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_contratacion" class="form-label">Fecha de Contratación</label>
                            <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" required>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection


@push('styles')

@endpush
