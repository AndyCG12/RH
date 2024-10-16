<div id="header" class="app-header">
    <div class="navbar-header">
        <a href="{{ url('/inicio') }}" class="navbar-brand"><b class="me-1">RH</b> GO1</a>
        <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
        </button>
    </div>

    <div class="navbar-nav">
        <div class="navbar-item navbar-user dropdown">
            <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
            @if(auth()->user()->profile_photo)
                        <img src="{{ Storage::url(auth()->user()->profile_photo) }}" alt="Foto de perfil" style="margin:auto; height:auto;">
                        @else
                        <img src="{{ asset('assets/img/default-profile-photo.jpg') }}" alt="Foto de perfil por defecto">
                        @endif
                <span>
                    <span class="d-none d-md-inline">@if(auth()->user())
                                    {{ '@' . auth()->user()->first_name }}
                                    @else
                                    Invitado
                                    @endif</span>
                    <b class="caret"></b>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-1">
                
                <!-- aqui edite el login para que salga -->

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{ route('logout') }} " class="dropdown-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    <a href="{{ route('login') }}" class="dropdown-item">Log Out</a>
                </form> -->

            </div>
        </div>
    </div>
</div>
