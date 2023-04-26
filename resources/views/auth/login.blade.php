@extends('layouts.app') 
@vite(['resources/css/app_css/login.css', 'resources/css/app_css/normalize.css']) 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="login-center">
                        <div class="accedi_custom">
                            <h1>LOGIN</h1>

                            <p>Hai un account? Altrimenti <a href="/register">registrati</a></p>
                        </div>
                        <form method="POST" action="{{ route('login') }}" class="form-login">
                            @csrf

                            <div class="cred-container">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror shadow-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Mail"/>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror shadow-none" name="password" required autocomplete="current-password" placeholder="Password" />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <button class="btn btn-primary btn-block" type="submit">ACCEDI</button>

                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input class="form-check-input shadow-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label remember-me" for="remember">
                                                {{ __('Resta Connesso') }}
                                            </label>
                                        </div>

                                        <div class="col-md-7">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Password Dimenticata') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
