@extends('layouts.app-auth')
@section('content')
    <main class="main-content pt-5">
        <section class="account-login-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <div class="login-register-form-wrap">
                            <div class="login-register-form">
                                <div class="d-flex justify-content-center">
                                    <a href="/">
                                        <img width="100" class="logo-main mb-3" src="http://127.0.0.1:8000/theme/assets/img/logo-dark.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="form-title">
                                    <h4 class="title">Create account</h4>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name"
                                                    :value="old('name')" required autofocus placeholder="Name">
                                                @error('name')
                                                    <div class="form-message alert alert-danger fade show">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="email" name="email"
                                                    :value="old('email')" required autofocus placeholder="Email">
                                                @error('email')
                                                    <div class="form-message alert alert-danger fade show">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Password"
                                                    name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <div class="form-message alert alert-danger fade show">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" placeholder="Password"
                                                    name="password_confirmation" required autocomplete="current-password">
                                                @error('password_confirmation')
                                                    <div class="form-message alert alert-danger fade show">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn-theme">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="login-register-form-info">
                                    <p><a href="/login">{{ __('Already registered?') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
