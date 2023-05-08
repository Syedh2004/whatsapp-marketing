@extends('layouts.app')

@section('content')

@push('page-style')
    <style>
        option {
            margin-top: 20px;
        }
    </style>
@endpush

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <span>Create New User</span>
            </h1>
            <ul class="main-header__breadcrumb">
                <li>
                    <a href="/" onclick="return false;">Home</a>
                </li>
                <li class="active">
                    <a href="{{ route('users') }}"> User List</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="row">
        <div class="col-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <article class="widget widget__form">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7s-menu"></i><h3>Create User</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#"><i class="pe-7f-refresh"></i></a>
                        <a href="#"><i class="pe-7s-close"></i></a>
                    </div>
                </header>

                {!! Form::open(array('route' => 'users.store', 'method' => 'POST')) !!}
                    <div class="widget__content">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Full name">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                        <input type="password" name="password" value="{{ old('password') }}" placeholder="Enter Password">
                        <input type="password" name="confirm-password" value="{{ old('confirm-password') }}" placeholder="Enter Confirm Password">
                        <button type="submit">Apply</button>
                    </div>
                {!! Form::close() !!}
            </article>
        </div>
    </div>
</section>

@endsection
