@extends('layouts.app')

@section('title', 'Vacaciones')

@section('content')
<div class="container">
    <h1>Calendario de Vacaciones</h1>

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addvacacionModal">
        Agregar Vacaciones
    </button>

    <div id="calendar"></div>

    <!-- Modal para agregar vacaciones -->
    <div class="modal fade" id="addvacacionModal" tabindex="-1" aria-labelledby="addvacacionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addvacacionModalLabel">Agregar Vacaciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('vacacion.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="empleado_id" class="form-label">Empleado</label>
                            <select class="form-select" id="empleado_id" name="empleado_id" required>
                                @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}">{{ $empleado->nombre}} {{ $empleado->apellidoP}} {{ $empleado->apellidoM}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_fin" class="form-label">Fecha de fin</label>
                            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="activo">Activo</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para editar vacaciones -->
    <div class="modal fade" id="editvacacionModal" tabindex="-1" aria-labelledby="editvacacionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editvacacionModalLabel">Editar Vacaciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editvacacionForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_fecha_inicio" class="form-label">Fecha de inicio</label>
                            <input type="date" class="form-control" id="edit_fecha_inicio" name="fecha_inicio" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_fecha_fin" class="form-label">Fecha de fin</label>
                            <input type="date" class="form-control" id="edit_fecha_fin" name="fecha_fin" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_estado" class="form-label">Estado</label>
                            <select class="form-select" id="edit_estado" name="estado" required>
                                <option value="activo">Activo</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletevacacionModal">
                            Eliminar
                        </button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para eliminar vacaciones -->
    <div class="modal fade" id="deletevacacionModal" tabindex="-1" aria-labelledby="deletevacacionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletevacacionModalLabel">Eliminar Vacaciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Está seguro de que desea eliminar estas vacaciones?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="deletevacacionForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css" rel="stylesheet">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        // Asegúrate de que el objeto `vacaciones` esté pasando desde PHP a JavaScript
        var vacaciones = @json($vacaciones);

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: vacaciones, // Aquí simplemente pasamos las vacaciones como JSON
            eventClick: function(info) {
                var vacacion = info.event;
                $('#editvacacionForm').attr('action', '/vacaciones/' + vacacion.id); // Fijar la URL de acción
                $('#edit_fecha_inicio').val(vacacion.start.toISOString().substr(0, 10));
                $('#edit_fecha_fin').val(vacacion.end ? vacacion.end.toISOString().substr(0, 10) : vacacion.start.toISOString().substr(0, 10));
                $('#edit_estado').val(vacacion.extendedProps.estado);
                $('#editvacacionModal').modal('show');

                // Formulario de eliminación
                $('#deletevacacionForm').attr('action', '/vacaciones/' + vacacion.id);
            }
        });
        calendar.render();
    });
</script>
@endpush
