@extends('layouts.auth')

@section('content')
<div class="login login-with-news-feed">
    <!-- BEGIN news-feed -->
    <div class="news-feed">
        <div class="news-image" style="background-image: url('/assets/img/login-bg/login-bg-14.jpg')"></div>
        <div class="news-caption">
            <h4 class="caption-title"><b>RH</b>Go1</h4>
            <p>
                Plataforma de RH para Go1 Technologies
            </p>
        </div>
    </div>
    <!-- END news-feed -->

    <!-- BEGIN login-container -->
    <div class="login-container ">
        <!-- BEGIN login-header -->
        <div class="login-header mb-30px">
            <div class="brand">
                <div class="d-flex align-items-center">
                    <b>RH</b> Go1
                </div>
                <small>Recursos Humanos de GO1 Technologies</small>
            </div>
        </div>
        <!-- END login-header -->

        <!-- BEGIN login-content -->
        <div class="login-content">
            <form action="{{ route('login') }}" method="POST" class="fs-13px">
                @csrf
                <div class="form-floating mb-15px">
                    <input type="email" class="form-control h-45px fs-13px" placeholder="Email Address" id="email" name="email" required />
                    <label for="email" class="d-flex align-items-center fs-13px text-gray-600">Email</label>
                </div>
                <div class="form-floating mb-15px">
                    <input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" name="password" required />
                    <label for="password" class="d-flex align-items-center fs-13px text-gray-600">Contraseña</label>
                </div>
                <div class="form-check mb-30px">
                    <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember" />
                    <label class="form-check-label" for="remember">
                        Recordar credenciales
                    </label>
                </div>
                <div class="mb-15px">
                    <button type="submit" class="btn btn-theme d-block h-45px w-100 btn-lg fs-14px">Acceder</button>
                </div>
                <div class="mb-40px pb-40px text-dark">
                    No tienes cuenta Click <a href="{{ route('register') }}" class="text-primary">aqui</a> para registrarte.
                </div>
                <hr class="bg-gray-600 opacity-2" />
                <div class="text-gray-600 text-center  mb-0">
                    &copy; GO1 TECHNOLOGIES ; Todos los derechos reservados 2024
                </div>
            </form>
        </div>
        <!-- END login-content -->
    </div>
    <!-- END login-container -->
</div>
@endsection
