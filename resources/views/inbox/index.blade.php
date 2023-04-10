@extends('layouts.master')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                        <h3>Inbox</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Division</li>
                                <li class="breadcrumb-item active" aria-current="page">Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @include('message')
            </div>
            <section class="section mt-3">
                <div class="card shadow-sm">
                    <div class="card-header" style="padding-bottom: 0px">
                        <h5>
                            All Inboxes
                        </h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th>Name</th>
                                    <th class="col-1">Email</th>
                                    <th class="col-1">Phone Number</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inboxes as $key => $inbox)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $inbox->name }}</td>
                                        <td>{{ $inbox->email }}</td>
                                        <td>{{ $inbox->phone }}</td>
                                        <td>{{ $inbox->message }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
