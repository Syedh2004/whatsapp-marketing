@extends('layouts.app')

@section('content')

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <span>Role Management</span>
            </h1>
        </div>
    </header>

    @can('role-create')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
        </div>
    </div>
    @endcan

    <div class="row">

        <div class="col-md-12 mt-30">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>

        <div class="col-md-12">
            <article class="widget">
                <div class="widget__content table-responsive">
                    <table class="table table-striped media-table data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                @can('role-show', 'role-edit', 'role-delete')
                                    <th style="width: 280px;">Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    @can('role-show', 'role-edit', 'role-delete')
                                        <td>
                                            @can('role-show')
                                                <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                                            @endcan
                                            @can('role-edit')
                                                <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                            @endcan
                                            @can('role-delete')
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $roles->render() !!}
                </div>
            </article>
        </div>
    </div>

</section>

@endsection
