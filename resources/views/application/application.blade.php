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
                        <h3>Applications</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Customer</li>
                                <li class="breadcrumb-item active" aria-current="page">Applications</li>
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
                            List Applications
                        </h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn icon icon-left btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#add"><i class="bi bi-plus-lg"></i> Add</button>
                        <table class="table " id="table1">
                            <thead>
                                <tr>
                                    <th style="width: 30px">No.</th>
                                    <th>Name</th>
                                    <th>App Image</th>
                                    <th>App Url</th>
                                    <th>App Description</th>
                                    <th class="col-1">Category</th>
                                    <th class="col-1">Type</th>
                                    <th class="col-1">Year's Made</th>
                                    <th class="col-1">Created By</th>
                                    <th class="col-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $index => $application)
                                    <tr>
                                        <td style="width: 30px">{{ $index += 1 }}</td>
                                        <td>{{ $application->name }}</td>
                                        <td>
                                            <img src="{{ asset($application->image) }}" alt=""
                                                style="width: 200px; height: 80px; object-fit: cover">
                                        </td>
                                        <td style="word-wrap: break-word;max-width:150px; max-height: ">
                                            {{ $application->url }}</td>
                                        <td>{{ $application->description }}</td>
                                        <td>{{ $application->category->name }}</td>
                                        <td>{{ $application->type }}</td>
                                        <td>{{ $application->year }}</td>
                                        <td>{{ $application->created_by }}</td>
                                        <td>
                                            <a href="#" class="btn icon btn-success" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $application->id }}"><i
                                                    class="bi bi-pencil-fill"></i></a>

                                            <form action="{{ route('delete.application', $application->id) }}"
                                                class="d-inline" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn icon btn-danger">
                                                    <i class="bi bi-trash-fill"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @include('application.forms')
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
