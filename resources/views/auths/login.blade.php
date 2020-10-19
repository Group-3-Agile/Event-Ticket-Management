@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 28px; font-family: Optima, sans-serif; background-color:#cceeff;color:#e60000;"><b><i>{{ __('Login') }}</i></b></div>

                <div class="card-body" style="background-color:#f5f5f0;">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
<br>
<br>
                        <div class="form-group row">
                             <label for="email" class="col-sm-4 col-form-label text-md-right" style="font-size: 13px; font-family: DejaVu Sans Mono, monospace;">{{ __('Email :') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" style="font-size: 13px;" placeholder="Email-Address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-size: 13px; font-family: DejaVu Sans Mono, monospace">{{ __('Password :') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="font-size: 13px;" placeholder = "Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="font-size:10px" for="remember" >
                                        &ensp;&ensp;&ensp;{{ __('    Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-size: 13px;">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 12px; color:red;"><b>
                                    {{ __('Forgot Your Password?') }}
                                </b></a>
                            </div>
							<br>
							<br>
							<br>
							<br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
