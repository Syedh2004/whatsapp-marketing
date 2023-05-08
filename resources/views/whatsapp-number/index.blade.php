@extends('layouts.app')

@section('content')

@push('page-style')
    <style>
        .dataTables_length label {
            display: flex;
            align-items: center;
        }
        .dataTables_length select {
            width: auto;
            margin-left: 10px;
            margin-right: 10px;
        }
        .dataTables_filter {
            float: right;
        }
        .dataTables_filter label {
            display: flex;
            align-items: center;
        }
        .dataTables_filter input {
            width: auto;
            margin-left: 10px;
        }
        .dataTables_length,.dataTables_filter {
            margin-bottom: 20px;
        }
        .dataTables_paginate {
            float: right;
        }
        .dataTables_info {
            margin-top: 20px;
        }
     </style>
@endpush

<section class="content">
    <header class="main-header">
        <div class="main-header__nav">
            <h1 class="main-header__title">
                <span>Whatsapp Number Management</span>
            </h1>
        </div>
    </header>

    <div class="row">
        <div class="col-md-12">
            @can ('whatsapp-number-create')
                <a class="btn btn-success" href="{{ route('whatsapp-number.create') }}"> Add New Number</a>
            @endcan
            @can ('whatsapp-number-import')
                <a class="btn btn-success" href="{{ route('whatsapp-number.import') }}"> Import Number</a>
            @endcan
        </div>
    </div>

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
                    <table class="table table-striped media-table data-table" id="whatsapp-number-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Numbers</th>
                                @can ('whatsapp-number-show', 'whatsapp-number-edit', 'whatsapp-number-destroy')
                                    <th style="width: 280px;">Action</th>
                                @endcan
                              </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </article>
        </div>
    </div>

</section>

@push('page-script')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('whatsapp-number.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'numbers', name: 'numbers'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endpush

@endsection
