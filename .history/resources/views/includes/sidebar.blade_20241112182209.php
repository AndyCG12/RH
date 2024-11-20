<div id="sidebar" class="app-sidebar" data-bs-theme="dark">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image">
                        @if(auth()->user()->profile_photo)
                        <img src="{{ Storage::url(auth()->user()->profile_photo) }}" alt="Foto de perfil" style="margin:auto; height:auto;">
                        @else
                        <img src="{{ asset('assets/img/default-profile-photo.jpg') }}" alt="Foto de perfil por defecto" >
                        @endif
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                @if(auth()->user())
                                {{  auth()->user()->first_name . ' @GO1'}}
                                @else
                                Invitado
                                @endif
                            </div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <br>
                        <br>
                    </div>
                </a>
            </div>
            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="{{ route('perfil')}}" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Perfil</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>

            <div class="menu-header">Opciones</div>

            <div class="menu-item">
                <a href="{{ route('empleados')}}" class="menu-link">
                    <div class="menu-icon bi bi-people-fill fs-20px h-20px d-flex align-items-center justify-content-center bg-light mb-11">
                    </div>
                    <div class="menu-text">Empleados</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('razones')}}" class="menu-link">
                    <div class="menu-icon bi bi-file-earmark-person fs-20px h-20px d-flex align-items-center justify-content-center bg-light mb-11">
                    </div>
                    <div class="menu-text">Razones sociales</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('nomina')}}" class="menu-link">
                    <div class="menu-icon bi bi-file-earmark-person fs-20px h-20px d-flex align-items-center justify-content-center bg-light mb-11">
                    </div>
                    <div class="menu-text">Nominas</div>
                </a>
            </div>
            <div class="menu-item">

                <a href="{{ route('calendario')}}" class="menu-link">
                    <div class=" menu-icon bi bi-calendar-range fs-20px h-20px d-flex align-items-center justify-content-right bg-light mb-11 ">
                    </div>
                    <div class="menu-text">Calendario</div>
                </a>

            </div>
            <div class="menu-item">
                <a href="{{ route('project')}}" class="menu-link">
                    <div class=" menu-icon bi bi-graph-up-arrow fs-20px h-30px d-flex align-items-center justify-content-center bg-light mb-11 ">
                    </div>
                    <div class="menu-text">Gestión operativa</div>
                </a>
            </div>
            <!-- <div class="menu-item">
                <a href="{{ route('departamentos')}}" class="menu-link">
                    <div class=" menu-icon bi bi-grid-1x2-fill fs-20px h-20px d-flex align-items-center justify-content-right bg-light mb-11 ">
                    </div>
                    <div class="menu-text">Departamentos</div>
                </a>
            </div> -->
            <div class="menu-item">
                <a href="{{ route('vacaciones')}}" class="menu-link">

                    <div class=" menu-icon bi bi-calendar-date fs-20px h-20px d-flex align-items-center justify-content-right bg-light mb-11 ">
                    </div>
                    <div class="menu-text">Políticas de vacaciones</div>
                </a>
            </div>

        </div>
    </div>
</div>
