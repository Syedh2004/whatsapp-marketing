@extends('layouts.app')

@section('content')

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <span>Users Management</span>
            </h1>
        </div>
    </header>

    @can('users-create')
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
                                <th>Email</th>
                                <th>Roles</th>
                                @can('users-show', 'users-edit', 'users-destroy')
                                    <th style="width: 280px;">Action</th>
                                @endcan
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    @can('users-show', 'users-edit', 'users-destroy')
                                        <td>
                                            @can('users-show')
                                                <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
                                            @endcan
                                            @can('users-edit')
                                                <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                            @endcan
                                            @can('users-destroy')
                                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    @endcan
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
                    {!! $data->render() !!}
                </div>
            </article>
        </div>
    </div>

</section>

@endsection
