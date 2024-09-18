<div id="sidebar" class="app-sidebar" data-bs-theme="dark">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image">
                        <img src="{{ asset('assets/img/user/user-13.jpg') }}" alt="" />
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                ISC ANDY
                            </div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <small>Estamos diseñando para residencia</small>
                    </div>
                </a>
            </div>

            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Settings</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>

            <div class="menu-header">Navigation</div>

            <div class="menu-item">
                <a href="{{ route('perfil')}}" class="menu-link">
                    <div class="menu-text">Perfil Empleados</div>
                </a>
            </div>

            <div class="menu-item">
                <a href="#" class="menu-link">
                    <div class="menu-text">Razones sociales</div>
                </a>
            </div>

            <div class="menu-item">
                <a href="#" class="menu-link">
                    <div class="menu-text">Calendario de vacaciones</div>
                </a>
            </div>

            <div class="menu-item">
                <a href="#" class="menu-link">
                    <div class="menu-text">Gestión operativa</div>
                </a>
            </div>

            <div class="menu-item">
                <a href="#" class="menu-link">
                    <div class="menu-text">Luego</div>
                </a>
            </div>
        </div>
    </div>
</div>
