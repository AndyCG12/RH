@extends('layouts.app')

@section('title', 'Gestión Operativa')

@section('content')
    <div class="container">
        <div class="col-14 ">
            <!-- BEGIN panel -->
            <div class="panel " data-sortable-id="table-basic-7">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading bg-cyan-700 text-white">
                    <h4 class="panel-title">Proyectos</h4>
                    <div class="panel-heading-btn">
                        <div class="btn-group my-n1">
                            <button data-bs-target="#addProjectModal" class="btn btn-sm btn-indigo flex me-1"
                                data-bs-toggle="modal">Nuevo proyecto</button>
                            <button type="button" class="btn btn-purple btn-xs dropdown-toggle"
                                data-bs-toggle="dropdown"><b class="caret"></b></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('grupo') }}" class="dropdown-item">Grupos</a>
                                <a href="{{ route('bonos') }}" class="dropdown-item">Bonos</a>
                                <a href="{{ route('incidencias') }}" class="dropdown-item">Incidencias</a>
                                <a href="{{ route('nomina') }}" class="dropdown-item">Nominas</a>
                                <a href="{{ route('compras') }}" class="dropdown-item">Solicitud Compras</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-striped">
                    <table id="data-table-buttons" width="100%"
                        class="table table-striped table-bordered align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Proyecto</th>
                                <th>Descripción</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Finalización</th>
                                <th width="1%" data-orderable="false">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->start_date }}</td>
                                    <td>{{ $project->end_date ?? 'Pendiente' }}</td>
                                    <td nowrap>
                                        <!-- Botón para Editar -->
                                        <button class="btn btn-sm btn-primary w-60px me-1" data-bs-toggle="modal"
                                            data-bs-target="#editProjectModal" data-id="{{ $project->id }}"
                                            data-name="{{ $project->name }}"
                                            data-description="{{ $project->description }}"
                                            data-start-date="{{ $project->start_date }}"
                                            data-end-date="{{ $project->end_date ?? 'Pendiente' }}"
                                            data-empleados="{{ $project->groups->flatMap->empleados->pluck('id')->implode(',') }}">
                                            Edit
                                        </button>

                                        <!-- Botón para Eliminar -->
                                        <button class="btn btn-sm btn-white w-60px" data-bs-toggle="modal"
                                            data-bs-target="#deleteProjectModal" data-id="{{ $project->id }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProjectModalLabel">Nuevo Proyecto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="crearProyectoForm" action="{{ route('project.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nombre del Proyecto</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="description">Descripción</label>
                                        <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="start_date">Fecha de Inicio</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="end_date">Fecha de Fin</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3 row ">
                                        <label for="empleados" class="form-label col-form-label col-lg-4">Asignar
                                            Empleados</label>
                                        <div class="col-lg-8">
                                            <select name="empleados[]" id="empleados" class=" multi-select2 form-control"
                                                multiple required>
                                                <optgroup label="Empleados Activos">
                                                    @foreach ($empleados as $empleado)
                                                        <option value="{{ $empleado->id }}">{{ $empleado->nombre }}
                                                        </option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer mt-3">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Crear Proyecto</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel"aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteProjectModalLabel">Eliminar Proyecto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="delete-project-form" method="POST" action="{{ route('project.destroy', ':id') }}">
                            @csrf
                            @method('DELETE')

                            <p>¿Estás seguro que deseas eliminar este proyecto?</p>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal para agregar proyecto --


@endsection

@push('styles')
    <!-- Agregar CSS específico para esta página -->
    <!-- Incluye Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <!-- Agregar JS específico para esta página -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inicializar select2 dinámicamente en base al modal que se abre
            $('#addProjectModal, #editProjectModal').on('show.bs.modal', function() {
                // Seleccionar el select de empleados dentro del modal actual
                var modal = $(this);
                var selectEmpleados = modal.find('.multi-select2');

                // Asegurarte de que select2 se inicialice para cada modal
                selectEmpleados.select2({
                    dropdownParent: modal // Asegurar que el dropdown aparezca dentro del modal correcto
                });
            });
        });
    </script>

    <script>
        // Capturar el evento cuando el modal de edición se muestra
        $('#editProjectModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Botón que activó el modal
            var id = button.data('id');
            var name = button.data('name');
            var description = button.data('description');
            var startDate = button.data('start-date');
            var endDate = button.data('end-date');
            var empleados = button.data('empleados').split(','); // Convertir los IDs de empleados en un array

            // Actualizar los campos del modal con la información del proyecto
            var modal = $(this);
            modal.find('#project-id').val(id);
            modal.find('#project-name').val(name);
            modal.find('#project-description').val(description);
            modal.find('#project-start-date').val(startDate);
            modal.find('#project-end-date').val(endDate);

            // Si tienes un campo de selección múltiple para los empleados
            modal.find('#project-employees').val(empleados).trigger('change');
        });
    </script>

    <script>
        // Capturar el evento cuando el modal de eliminación se muestra
        $('#deleteProjectModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Botón que activó el modal
            var id = button.data('id');

            // Actualizar el action del formulario de eliminación con el ID del proyecto
            var form = $(this).find('form');
            var action = form.attr('action').replace(':id', id);
            form.attr('action', action);
        });
    </script>
@endpush
@extends('layouts.app')

@section('title', 'Gestión Operativa')

@section('content')
    <div class="container">
        <div class="col-14">
            <!-- BEGIN panel -->
            <div class="panel" data-sortable-id="table-basic-7">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading bg-cyan-700 text-white">
                    <h4 class="panel-title">Proyectos</h4>
                    <div class="panel-heading-btn">
                        <div class="btn-group my-n1">
                            <button data-bs-target="#addProjectModal" class="btn btn-sm btn-indigo flex me-1"
                                data-bs-toggle="modal">Nuevo proyecto</button>
                            <button type="button" class="btn btn-purple btn-xs dropdown-toggle"
                                data-bs-toggle="dropdown"><b class="caret"></b></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('grupo') }}" class="dropdown-item">Grupos</a>
                                <a href="{{ route('bonos') }}" class="dropdown-item">Bonos</a>
                                <a href="{{ route('incidencias') }}" class="dropdown-item">Incidencias</a>
                                <a href="{{ route('nomina') }}" class="dropdown-item">Nominas</a>
                                <a href="{{ route('compras') }}" class="dropdown-item">Solicitud Compras</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-striped">
                    <table id="data-table-buttons" width="100%"
                        class="table table-striped table-bordered align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Proyecto</th>
                                <th>Descripción</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Finalización</th>
                                <th width="1%" data-orderable="false">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->start_date }}</td>
                                    <td>{{ $project->end_date ?? 'Pendiente' }}</td>
                                    <td nowrap>
                                        <!-- Botón para Editar -->
                                        <button class="btn btn-sm btn-primary w-60px me-1" data-bs-toggle="modal"
                                            data-bs-target="#editProjectModal" data-id="{{ $project->id }}"
                                            data-name="{{ $project->name }}"
                                            data-description="{{ $project->description }}"
                                            data-start-date="{{ $project->start_date }}"
                                            data-end-date="{{ $project->end_date ?? 'Pendiente' }}"
                                            data-empleados="{{ $project->groups->flatMap->empleados->pluck('id')->implode(',') }}">
                                            Edit
                                        </button>

                                        <!-- Botón para Eliminar -->
                                        <button class="btn btn-sm btn-white w-60px" data-bs-toggle="modal"
                                            data-bs-target="#deleteProjectModal" data-id="{{ $project->id }}">
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

    <!-- Modal para agregar proyecto -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel"
        aria-hidden="true">
        <!-- Aquí va el contenido del modal para agregar -->
    </div>

    <!-- Modal para editar proyecto -->
    <div class="modal fade" id="editProjectModal" tabindex="-1" aria-labelledby="editProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProjectModalLabel">Editar Proyecto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-project-form" method="POST"
                        action="{{ route('project.update', $project->id) }}">
                        @csrf
                        @method('PUT')

                        <input type="hidden" id="project-id" name="project_id">

                        <div class="mb-3">
                            <label for="project-name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="project-name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="project-description" class="form-label">Descripción</label>
                            <textarea class="form-control" id="project-description" name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="project-start-date" class="form-label">Fecha de Inicio</label>
                            <input type="date" class="form-control" id="project-start-date" name="start_date"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="project-end-date" class="form-label">Fecha de Fin</label>
                            <input type="date" class="form-control" id="project-end-date" name="end_date">
                        </div>

                        <div class=" mt-3 row">
                            <label for="project-employees" class="form-label">Empleados</label>
                            <div class="col-lg-8">
                                <select class=" multi-select2 form-control" id="project-employees" name="empleados[]"
                                    multiple required>
                                    <optgroup label="Empleados Activos">
                                        @foreach ($empleados as $empleado)
                                            <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para eliminar proyecto -->
    <div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel"aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteProjectModalLabel">Eliminar Proyecto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="delete-project-form" method="POST" action="{{ route('project.destroy', ':id') }}">
                            @csrf
                            @method('DELETE')

                            <p>¿Estás seguro que deseas eliminar este proyecto?</p>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addProjectModal, #editProjectModal').on('show.bs.modal', function() {
                var modal = $(this);
                var selectEmpleados = modal.find('.multi-select2');
                selectEmpleados.select2({
                    dropdownParent: modal
                });
            });
        });

        $('#editProjectModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var description = button.data('description');
            var startDate = button.data('start-date');
            var endDate = button.data('end-date');
            var empleados = button.data('empleados').split(',');

            var modal = $(this);
            modal.find('#project-id').val(id);
            modal.find('#project-name').val(name);
            modal.find('#project-description').val(description);
            modal.find('#project-start-date').val(startDate);
            modal.find('#project-end-date').val(endDate);
            modal.find('#project-employees').val(empleados).trigger('change');
        });

        $('#deleteProjectModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');

            var form = $(this).find('form');
            var action = form.attr('action').replace(':id', id);
            form.attr('action', action);
        });
    </script>
@endpush
