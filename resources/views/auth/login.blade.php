@extends('layouts.app')
<style>
    body
    {
        background-image: url('images/bg1.jpg');
    }
    .logo-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .logo-container img {
        max-width: 100%;
        height: auto;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
                <div class="logo-container">
                    <img src="images/logo.png" alt="Logo">
                </div>
            <div class="card">
                <h5 class="text-center mt-4" style="font-weight:bold; font-size:22px">Sign in</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <!-- <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> -->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4" >
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="float:right; text-decoration:none" >
                                        {{ __('Forgot Password') }}
                                    </a>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="col-md-12 mt-3">
                                <p>Don't have an account yet?</p>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:100%; margin-top:-18px">
                                    {{ __('Create Account') }}
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <h6 style="font-weight:bold;text-align:center;margin-top:30px">Or Login With</h6>
            <div class="col-md-12 mt-3">
                <div class="row">
                    <div class="col-md-6">
                       <button class="btn btn-primary" style="width:100%">
                            Linkedin
                       </button>
                    </div>
                    <div class="col-md-6">
                       <button class="btn btn-danger" style="width:100%">
                            Google
                       </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
