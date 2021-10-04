@extends('layouts.auth')

@section('title')
    Login User
@endsection

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Login User</b></a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group has-feedback">
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autocomplete="current-password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 

                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                    </div>
                </div>
            </form>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
@endsection