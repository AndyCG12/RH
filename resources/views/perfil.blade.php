@extends('layouts.app')

@section('title', 'Lista de Empleados')

@section('content')
<div class="container">
    <!-- Aqui esta el formulario para agregar un nuevo empleado -->
    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Basic Form Validation</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- END panel-heading -->
                <!-- BEGIN panel-body -->
                <div class="panel-body">
                    <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="fullname">Full Name * :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="email">Email * :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="website">Website :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="url" id="website" name="website" data-parsley-type="url" placeholder="url" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Message (20 chars min, 200 max) :</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="message" name="message" rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Range from 20 - 200"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Digits :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" id="digits" name="digits" data-parsley-type="digits" placeholder="Digits" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Number :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" id="number" name="number" data-parsley-type="number" placeholder="Number" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label form-label">&nbsp;</label>
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END panel-body -->
                <!-- BEGIN hljs-wrapper -->
                <div class="hljs-wrapper">
                    <pre><code class="html" data-url="../assets/data/form-validation/code-1.json"></code></pre>
                </div>
                <!-- END hljs-wrapper -->
            </div>
            <!-- END panel -->
        </div>
        <!-- END col-6 -->
        <!-- BEGIN col-6 -->

    </div>
				<!-- BEGIN col-6 -->
				<div class="col-xl-6">
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="table-basic-7">
						<!-- BEGIN panel-heading -->
						<div class="panel-heading">
							<h4 class="panel-title">Lista de empleados</h4>
                            <div class="panel-heading-btn">
                            <a href="#" class="btn btn-sm btn-primary flex me-1">Agregar empleado</a>
                            </div>
						</div>
						<!-- END panel-heading -->
						<!-- BEGIN panel-body -->
						<div class="panel-body">
							<!-- BEGIN table-responsive -->
							<div class="table-responsive">
								<table class="table table-striped mb-0 align-middle">
									<thead>
										<tr>
											<th>#</th>
											<th>Username</th>
											<th>Email Address</th>
											<th width="1%"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="../assets/img/user/user-1.jpg" class="rounded h-30px" />
											</td>
											<td>Nicky Almera</td>
											<td>nicky@hotmail.com</td>
											<td nowrap>
												<a href="#" class="btn btn-sm btn-primary w-60px me-1">Edit</a>
												<a href="#" class="btn btn-sm btn-white w-60px">Delete</a>
											</td>
										</tr>
										<tr>
											<td>
												<img src="../assets/img/user/user-2.jpg" class="rounded h-30px" />
											</td>
											<td>Edmund Wong</td>
											<td>edmund@yahoo.com</td>
											<td nowrap>
												<div class="btn-group">
													<a href="#" class="btn btn-white btn-sm w-90px">Settings</a>
													<a href="#" class="btn btn-white btn-sm dropdown-toggle w-30px no-caret" data-bs-toggle="dropdown">
													<span class="caret"></span>
													</a>
													<div class="dropdown-menu dropdown-menu-end">
														<a href="#" class="dropdown-item">Action 1</a>
														<a href="#" class="dropdown-item">Action 2</a>
														<a href="#" class="dropdown-item">Action 3</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">Action 4</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<img src="../assets/img/user/user-3.jpg" class="rounded h-30px" />
											</td>
											<td>Harvinder Singh</td>
											<td>harvinder@gmail.com</td>
											<td class="with-btn" nowrap>
												<a href="#" class="btn btn-sm btn-primary w-60px me-1">Edit</a>
												<a href="#" class="btn btn-sm btn-white w-60px">Delete</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- END table-responsive -->
						</div>
						<!-- END panel-body -->
						<!-- BEGIN hljs-wrapper -->
						<div class="hljs-wrapper">
							<pre><code class="html" data-url="../assets/data/table-basic/code-7.json"></code></pre>
						</div>
						<!-- END hljs-wrapper -->
					</div>
					<!-- END panel -->
					<!-- BEGIN panel -->

					<!-- END panel -->
				</div>
				<!-- END col-6 -->
    <h1>Lista de Empleados</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Email</th>
                <th>Puesto</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellidoP }}</td>
                <td>{{ $empleado->apellidoM }}</td>
                <td>{{ $empleado->email }}</td>
                <td>{{ $empleado->puesto }}</td>
                <td>{{ $empleado->departamento }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
