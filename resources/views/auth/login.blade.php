@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card login-main-wrap">
                <div class="card-header h1">{{ __('Inloggen') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb_3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                        <a href="{{ route('password.request') }}" style="display: block; color: #DC8742; font-size: 14px;">{{ __('Ben je je wachtwoord vergeten?') }}</a>
                        
                            <div class="col-md-8 offset-md-4" style="display: flex; margin-top: 20px; justify-content: space-between; align-items: center;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inloggen') }}
                                </button>

                                <p>Nog geen account?<a href="{{ route('register') }}" style="color: #DC8742;"> Registreer!</a></p>
                            </div>
                        </div>
                    </form> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
