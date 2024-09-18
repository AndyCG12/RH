
{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.auth')


@section('title', __('Register'))

@section('content')
<div class="register register-with-news-feed">
    <div class="news-feed">
        <div class="news-image" style="background-image: url('assets/img/login-bg/login-bg-9.jpg')"></div>
        <div class="news-caption">
            <h4 class="caption-title"><b>RH</b> Go1</h4>
            <p>{{ __('Plataforma de Rh para Go1 Technologies') }}</p>
        </div>
    </div>

    <div class="register-container">
        <div class="register-header mb-25px h1">
            <div class="mb-1">{{ __('Sign Up') }}</div>
            <small class="d-block fs-15px lh-16">{{ __('Create your Color Admin Account. It\'s free and always will be.') }}</small>
        </div>

        <div class="register-content">
            <form method="POST" action="{{ route('register') }}" class="fs-13px">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="mb-2">{{ __('Nombre(s)') }} <span class="text-danger">*</span></label>
                    <div class="row gx-3">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <input id="first_name" type="text" class="form-control fs-13px @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="given-name" autofocus placeholder="{{ __('Nombre') }}">
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control fs-13px @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="family-name" placeholder="{{ __('Apellidos') }}">
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="mb-2">{{ __('Email') }} <span class="text-danger">*</span></label>
                    <input id="email" type="email" class="form-control fs-13px @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email address') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email_confirmation" class="mb-2">{{ __('Re-enter Email') }} <span class="text-danger">*</span></label>
                    <input id="email_confirmation" type="email" class="form-control fs-13px" name="email_confirmation" required placeholder="{{ __('Re-enter email address') }}">
                </div>
                <div class="mb-4">
                    <label for="password" class="mb-2">{{ __('Password') }} <span class="text-danger">*</span></label>
                    <input id="password" type="password" class="form-control fs-13px @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password-confirm" class="mb-2">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>
                    <input id="password-confirm" type="password" class="form-control fs-13px" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input @error('agreement') is-invalid @enderror" type="checkbox" value="1" id="agreementCheckbox" name="agreement" required>
                    <label class="form-check-label" for="agreementCheckbox">
                        {!! __('By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use</a>.') !!}
                    </label>
                    @error('agreement')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-theme d-block w-100 btn-lg h-45px fs-13px">
                        {{ __('Sign Up') }}
                    </button>
                </div>
                <div class="mb-4 pb-5">
                    {{ __('Already a member?') }} <a href="{{ route('login') }}">{{ __('Click here to login') }}</a>.
                </div>
                <hr class="bg-gray-600 opacity-2" />
                <p class="text-center text-gray-600">
                    &copy; {{ __('Color Admin All Right Reserved') }} {{ date('Y') }}
                </p>
            </form>
        </div>
    </div>
</div>
@endsection

@push('css')
<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/apple/app.min.css') }}" rel="stylesheet" />
@endpush

@push('scripts')
<script src="{{ asset('assets/plugins/ionicons/dist/ionicons/ionicons.js') }}"></script>
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
@endpush
