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
    .widget__title {
        padding-left: 20px;
    }
</style>

@endpush

<section class="login-section">
    <div class="col-md-12">
        <article class="widget widget__login">
            @error('password')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            <header class="widget__header one-btn">
                <div class="widget__title ">
                    {{ __('Confirm Password') }}
                    {{ __('Please confirm your password before continuing.') }}
                </div>
                <div class="widget__config">
                    <a href="assets/#"><i class="pe-7s-help1"></i></a>
                </div>
            </header>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="widget__content">
                    <input id="password" type="password"
                        class="@error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password"
                        placeholder="{{ __('Password') }}" />
                    <button type="submit">{{ __('Confirm Password') }}</button>
                </div>
                <div class="login__remember text-center">
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
