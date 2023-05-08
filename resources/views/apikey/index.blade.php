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
                <span>Insert API Key</span>
            </h1>
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

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <article class="widget widget__form">
                <header class="widget__header">
                    <div class="widget__title">
                        <i class="pe-7s-menu"></i><h3>Please Insert API Key</h3>
                    </div>
                    <div class="widget__config">
                        <a href="#"><i class="pe-7f-refresh"></i></a>
                        <a href="#"><i class="pe-7s-close"></i></a>
                    </div>
                </header>

                {!! Form::open(array('route' => 'apikey.store','method'=>'POST')) !!}
                    <div class="widget__content">
                        <input type="text" name="apikey" value="{{ old('apikey') }}" placeholder="Enter API Key" />
                        <button type="submit">Apply</button>
                    </div>
                {!! Form::close() !!}
            </article>
        </div>
    </div>
</section>

@if ( $message = Session::get( 'success' ) )
    <script>
        window.setTimeout(function() {
            window.location.href = "{{ route('send-message.index') }}";
        }, 5000);
    </script>
@endif

@endsection
