@extends('layouts.auth')

@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">
                    <img src="{{ url('images/icon.jpg') }}" alt="" class="logo mb-5 mt-5">
                </h1>
                <div class="card vector">

                    <div class="card-body">
                        <form method="POST" action="{{ route('signin') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right dc-text">{{ __('E-Mail / Username') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="vector form-control{{ $errors->has('access') ? ' is-invalid' : '' }}" name="access" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('access'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('access') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right dc-text">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="vector form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('access'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('access') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label dc-text" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="vector btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
