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
    <
                <!-- Modal para agregar proyecto --
    @endforeach

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
