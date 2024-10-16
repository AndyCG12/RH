@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')
<div id="content">
    <!-- BEGIN page-header -->
    <h1 class="page-header">Perfil de usuario</h1>
    <!-- END page-header -->
    <hr class="mb-4" />
    <!-- BEGIN row -->

    <div class="row">
        <!-- BEGIN col-3 -->
        <div style="width: 230px">
            <!-- BEGIN #sidebar-bootstrap -->
            <nav class="navbar navbar-sticky d-none d-xl-block my-n4 py-4 h-100 text-end">
                <nav class="nav" id="bsSpyTarget">
                    <a class="nav-link active" href="#general" data-toggle="scroll-to">General</a>
                    <a class="nav-link" href="#mediaAndFiles" data-toggle="scroll-to">Fotos</a>
                </nav>
            </nav>
            <!-- END #sidebar-bootstrap -->
        </div>
        <!-- END col-3 -->
        <!-- BEGIN col-9 -->
        <div class="col-xl-8" id="bsSpyContent">
            <!-- BEGIN #general -->
            <div id="general" class="mb-4 pb-3">
                <h4 class="d-flex align-items-center mb-2">
                    <span class="iconify fs-24px me-2 text-body text-opacity-75 my-n1" data-icon="solar:user-bold-duotone"></span> General
                </h4>
                <p>Visualiza y actualiza la información de la cuenta</p>
                <div class="card">
                    <div class="list-group list-group-flush fw-bold">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>Nombre</div>
                                <div class="text-body text-opacity-60"> @if(auth()->user())
                                    {{ auth()->user()->first_name }}
                                    @else
                                    Invitado
                                    @endif
                                </div>
                            </div>
                            <div class="w-100px">
                                <a href="#modalEditName" data-bs-toggle="modal" class="btn btn-secondary w-100px">Edit</a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>Username</div>
                                <div class="text-body text-opacity-60">@if(auth()->user())
                                    {{ '@' . auth()->user()->first_name }}
                                    @else
                                    Invitado
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>Email address</div>
                                <div class="text-body text-opacity-60">@if(auth()->user())
                                    {{ auth()->user()->email }}
                                    @else
                                    Email.invitado
                                    @endif
                                </div>
                            </div>
                            <div>
                                <a href="#modalEdit" data-bs-toggle="modal" class="btn btn-secondary disabled w-100px">Edit</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END #general -->

            <!-- BEGIN #mediaAndFiles -->
            <div id="mediaAndFiles" class="mb-4 pb-3">
                <h4 class="d-flex align-items-center mb-2 mt-3">
                    <span class="iconify fs-24px me-2 text-body text-opacity-75 my-n1" data-icon="solar:camera-bold-duotone"></span>
                    Foto de perfil
                </h4>
                <p>Puedes actualizar tu foto de perfil aquí</p>
                <div class="card">
                    <div class="list-group list-group-flush fw-bold">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-fill">
                                <div>Todos los formatos de imágen admitidos</div>
                                <div class="text-body text-opacity-60">
                                    .png, .jpg, .svg, etc.
                                </div>
                            </div>
                            <div>
                                <a href="#editarImagen" data-bs-toggle="modal" class="btn btn-secondary w-100px">Edit</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END #mediaAndFiles -->


            <!-- BEGIN #resetSettings -->

            <!-- END #resetSettings -->
        </div>
        <!-- END col-9-->
    </div>
    <!-- END row -->
</div>
<div class="modal fade" id="modalEditName" tabindex="-1" aria-labelledby="modalEditNameLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditNameLabel">Editar Nombre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('perfil.update.name') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">Nuevo Nombre</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ auth()->user()->first_name}}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para actualizar foto de perfil -->
    <div class="modal fade" id="editarImagen" tabindex="-1" aria-labelledby="editarImagenLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarImagenLabel">Actualizar Foto de Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('perfil.update.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Imagen Actual</label>
                        <div class="text-center">
                            <img id="currentImage" src="{{ auth()->user()->profile_photo ? Storage::url(auth()->user()->profile_photo) : asset('img/default-profile-photo.jpg') }}" alt="Foto de perfil actual" class="img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="profile_photo" class="form-label">Nueva Foto de Perfil</label>
                        <input type="file" class="form-control" id="profile_photo" name="profile_photo" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vista previa</label>
                        <div class="text-center">
                            <img id="preview" src="#" alt="Vista previa" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover; display: none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Subir Foto</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- Modal -->


@endsection

@push('styles')
<!-- Agregar CSS específico para esta página -->
@endpush

@push('scripts')
<!-- Agregar JS específico para esta página -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('profile_photo');
    const preview = document.getElementById('preview');

    input.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
@endpush
