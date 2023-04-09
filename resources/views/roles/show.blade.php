@extends('layouts.app')


@section('content')

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <span>Show Role</span>
            </h1>
            <ul class="main-header__breadcrumb">
                <li>
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }}</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</section>

@endsection
