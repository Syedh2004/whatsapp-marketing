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

<section class="reset-password-section">
    <div class="@if ( Auth::check() ) col-md-12 @else col-md-4 col-md-offset-4 @endif">
        <article class="widget widget__login" @if ( Auth::check() ) style="margin-top: 100px" @endif>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <header class="widget__header one-btn">
                <div class="widget__title">
                    <div class="main-logo">
                        <img src="{{ asset('assets/img/logo.png') }}" />
                    </div>
                    {{ __('Reset Password') }}
                </div>
                <div class="widget__config">
                    <a href="assets/#">
                        <i class="pe-7s-help1"></i>
                    </a>
                </div>
            </header>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="widget__content">
                    <input
                        placeholder="{{ __('Email Address') }}"
                        id="email" type="email" class="@error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus />

                    <button type="submit">{{ __('Send Password Reset Link') }}</button>
                </div>
                <div class="login__remember text-center">
                    @if ( !Auth::check() )
                        @if (Route::has('login'))
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        @endif
                    @endif
                </div>
            </form>
        </article>
    </div>
</section>

@endsection
