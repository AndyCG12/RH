@extends('layouts.app')

@section('title', 'RH inicio')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in vato!') }}
</div>
<div class="container">
    <!-- BEGIN col-6 -->
    <div class="col-14 ">
        <!-- BEGIN panel -->
        <div class="panel " data-sortable-id="table-basic-7">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading bg-cyan-700 text-white">
                <h4 class="panel-title">Proyectos</h4>
                <div class="panel-heading-btn">
                    <button href="#modal-agregar-empleado" class="btn btn-sm btn-indigo flex me-1" data-bs-toggle="modal">Nuevo proyecto</button>
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
                                <th>Proyecto</th>
                                <th>Descripción</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Finalización</th>
                                <th width="1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>


                                <td nowrap>
                                    <button class="btn btn-sm btn-primary w-60px me-1" data-bs-toggle="modal" data-bs-target="">Edit</button>
                                    <!-- Modal para eliminar empleado -->
                                    <button class="btn btn-sm btn-white w-60px" data-bs-toggle="modal" data-bs-target="">Delete</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
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
