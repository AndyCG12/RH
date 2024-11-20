
@extends('layouts.app')


@section('title', 'Calendario')

@section('content')

<div id="content">


</div>
<div class="col-lg">
					<!-- BEGIN calendar -->
					<div id="calendar" class="calendar"></div>
					<!-- END calendar -->
				</div>

</div>

@endsection

@push('styles')
<!-- Agregar CSS específico para esta página -->


@endpush

@push('scripts')
<!-- Agregar JS específico para esta página -->
<script>
   document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',  // Mostrar en vista de mes
        events: [
            @foreach($projects as $project)
                {
                    title: '{{ $project->name }}',
                    start: '{{ $project->start_date }}',
                    end: '{{ $project->end_date }}',
                    description: '{{ $project->description }}'
                },
            @endforeach
        ],
        eventClick: function(info) {
            // Formatear las fechas usando toLocaleDateString
            var startDate = info.event.start.toLocaleDateString('es-ES', { day: 'numeric', month: 'long', year: 'numeric' });
            var endDate = info.event.end ? info.event.end.toLocaleDateString('es-ES', { day: 'numeric', month: 'long', year: 'numeric' }) : '';

            // Usar SweetAlert con un ícono de calendario de FontAwesome
            swal({
                title: info.event.title,  // Mostrar el nombre del proyecto
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: '<i class="fa fa-calendar" style="font-size: 50px; color: #5bc0de;"></i>' +
                                   '<br><strong>Descripción:</strong> ' + info.event.extendedProps.description +
                                   '<br><strong>Inicio:</strong> ' + startDate +
                                   (endDate ? '<br><strong>Fin:</strong> ' + endDate : '')
                    }
                },
                buttons: {
                    confirm: {
                        text: 'Ok',
                        value: true,
                        visible: true,
                        className: 'btn btn-primary',
                        closeModal: true
                    }
                }
            });
        }
    });
    calendar.render();
});




</script>

@endpush
