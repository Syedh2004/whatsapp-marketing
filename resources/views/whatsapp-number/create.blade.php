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
                    <a href="{{ route('whatsapp-number.index') }}"> Whatsapp Number List</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="row">
        <div class="col-12">
            @if ( Session::has('warning') )
                <div class="alert alert-warning" role="alert">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <div class="alert-body">
                        {{ Session::get('warning') }}
                    </div>
                </div>
            @endif
            @if ( Session::has('error') || $errors->any() )
                <div class="alert alert-danger" role="alert">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <div class="alert-body">
                        {{ Session::has('error') ? Session::get('error') : $errors->first() }}
                    </div>
                </div>
            @endif
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
                        <i class="pe-7s-menu"></i><h3>Add Whatsapp Number</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#"><i class="pe-7f-refresh"></i></a>
                        <a href="#"><i class="pe-7s-close"></i></a>
                    </div>
                </header>

                {!! Form::open(array('route' => 'whatsapp-number.store','method'=>'POST')) !!}
                    <div class="widget__content">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name">
                        <input type="text" name="numbers" value="{{ old('numbers') }}" placeholder="Enter Number">
                        <button type="submit">Apply</button>
                    </div>
                {!! Form::close() !!}
            </article>
        </div>
    </div>
</section>

@endsection
