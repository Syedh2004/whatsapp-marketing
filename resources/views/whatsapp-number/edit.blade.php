@extends('layouts.app')

@section('content')

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <span>Edit User</span>
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
                        <i class="pe-7s-menu"></i><h3>Edit User</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#"><i class="pe-7f-refresh"></i></a>
                        <a href="#"><i class="pe-7s-close"></i></a>
                    </div>
                </header>

                {!! Form::model($data['user'], ['method' => 'PATCH', 'route' => ['users.update', $data['user']->id]]) !!}
                    <div class="widget__content">
                        {!! Form::text('name', $data['user']->name, array('placeholder' => 'Name')) !!}
                        {!! Form::text('email', $data['user']->email, array('placeholder' => 'Email')) !!}
                        {!! Form::password('password', array('placeholder' => 'Password')) !!}
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password')) !!}
                        {!! Form::select('roles[]', $data['roles'], $data['userRole'], array('multiple')) !!}
                        <button type="submit">Apply</button>
                    </div>
                {!! Form::close() !!}
            </article>
        </div>
    </div>
</section>

@endsection
