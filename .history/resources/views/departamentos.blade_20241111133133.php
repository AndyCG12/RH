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
                            @foreach ($departamentos as $departamento)
                            <tr>
                                <td>{{ $departamento->id }}</td>
                                <td>{{ $departamento->nombre }}</td>
                                <td>{{ $departamento->descripcion }}</td>
                                <td nowrap>
                                    <button data-bs-toggle="modal" data-bs-target="#modal-editar-{{ $departamento->id }}" class="btn btn-sm btn-primary w-60px me-1">Edit</button>
                                    <button class="btn btn-sm btn-white w-60px me-1" data-bs-toggle="modal" data-bs-target="#modal-eliminar-{{ $departamento->id }}">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
            <!-- Modal Editar -->
            
</div>


@endsection
