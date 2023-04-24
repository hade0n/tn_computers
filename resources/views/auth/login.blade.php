@extends('layouts.app')

@vite(['resources/css/app_css/login.css'])

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body">

                <div class="login-center">
                    <div class="accedi_custom">
                        <h1>ACCEDI</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="form-login">
                        @csrf
                                
                            <div class="cred-container">
                                <label for="email" >{{ __('Indirizzo Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                
                                    <label for="password" >{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <div class="row">
                                            <div class="col-md-5">
                                            <label class="form-check-label" for="remember">
                                                    {{ __('Resta Connesso') }}
                                                </label>
                                            </div>
                                        
                                            <div class="col-md-7">
                                                
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}" >
                                                        {{ __('Password Dimenticata') }}
                                                    </a>
                                                @endif
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
