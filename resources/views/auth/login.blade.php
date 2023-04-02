@extends('layouts.app')

@section('content')

@push('page-style')
<style>
    .wrapper {
        min-height: auto;
    }
    .btn {
        border-color: transparent;
    }
</style>

@endpush

<section class="login-section">
    <div class="col-md-4  col-md-offset-4">
        <article class="widget widget__login">
            @error('email')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            @error('password')
                <span class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <header class="widget__header one-btn">
                <div class="widget__title">
                    <div class="main-logo">
                        <img src="{{ asset('assets/img/logo.png') }}" />
                    </div>
                    {{ __('Login') }}
                </div>
                <div class="widget__config">
                    <a href="assets/#"><i class="pe-7s-help1"></i></a>
                </div>
            </header>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="widget__content">
                    <input placeholder="{{ __('Email Address') }}"
                        id="email" type="email" class="@error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus />
                    <input placeholder="{{ __('Password') }}"
                        id="password" type="password" class="@error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" />
                    <button type="submit">{{ __('Login') }}</button>
                </div>
                <div class="login__remember text-center">
                    <input type="checkbox" class="custom-checkbox" id="cc1" checked
                        name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                    <label for="cc1"></label>
                    {{ __('Remember Me') }}
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </article>
    </div>
</section>

@endsection
