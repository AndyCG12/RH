@extends('layouts.app')

@section('title', 'Grupos de trabajo')

@section('content')


<div class="container">
    <div class="col-14 ">
        <div class="panel " data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Grupos de trabajo</h4>
                <div class="panel-heading-btn">

                    <a href="{{ route('project') }}" class="btn btn-sm btn-warning flex me-1">Volver</a>
                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <!-- Botón para abrir el modal de agregar proyecto -->

            <div class="table-responsive table-striped">
                <table id="data-table-buttons" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Grupo</th>
                            <th>Empleados</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach($groups as $group)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $group->name }}</td> <!-- Nombre del grupo (proyecto) -->
                            <td>
                                @if($group->empleados && $group->empleados->count() > 0)  <!-- Si hay empleados en el grupo mostrara el nombre -->
                                @foreach($group->empleados as $empleado)
                                {{ $empleado->nombre }}<br>
                                @endforeach
                                @else <!-- SI NO MUESTRA EL SIGUIENTE ENUNCIADO -->
                                Sin empleados
                                @endif
                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>


@endsection

@push('styles')
<!-- Agregar CSS específico para esta página -->
@endpush

@push('scripts')
<!-- Agregar JS específico para esta página -->
@endpush
