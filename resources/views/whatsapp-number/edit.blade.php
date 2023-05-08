@extends('layouts.app')

@section('content')

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <span>Edit Whatsapp Number</span>
            </h1>
            <ul class="main-header__breadcrumb">
                <li>
                    <a href="/" onclick="return false;">WhatsApp Numbers</a>
                </li>
                <li class="active">
                    <a href="{{ route('whatsapp-number.index') }}"> Whatsapp Number List</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="row">
        <div class="col-12">
            @if ( count( $errors ) > 0)
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
                        <i class="pe-7s-menu"></i><h3>Edit Whatsapp Number</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#"><i class="pe-7f-refresh"></i></a>
                        <a href="#"><i class="pe-7s-close"></i></a>
                    </div>
                </header>

                {!! Form::model( $data, [ 'method' => 'PATCH', 'route' => [ 'whatsapp-number.update', $data->id ] ] ) !!}
                    <div class="widget__content">
                        {!! Form::hidden('id', $data->id) !!}
                        {!! Form::text('name', $data->name, array('placeholder' => 'Name')) !!}
                        {!! Form::text('numbers', $data->numbers, array('placeholder' => 'Number')) !!}
                        <button type="submit">Apply</button>
                    </div>
                {!! Form::close() !!}
            </article>
        </div>
    </div>
</section>

@endsection
