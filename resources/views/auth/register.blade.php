@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-main-wrap">
                <div class="card-header">{{ __('Registreren') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb_3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Naam') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb_3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb_3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb_3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Bevestig wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb_3">
                            <div class="form-group">
                                <label for="" class="main-label">Ik :</label>

                                <label class="cont"> Ben een zorgverlener
                                    <input type="radio" name="role" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="cont"> Zoek een zorgverlener
                                    <input type="radio" checked name="role" value="4" checked>
                                    <span class="checkmark"></span>
                                </label> 
                            </div>
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4" style="display: flex; justify-content: space-between; align-items: center;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registreren') }}
                                </button>
 
                                <p>Al een account? <a href="{{ route('login') }}" style="color: #DC8742;"> Inloggen</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
