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
                        <h3>Website Division</h3>
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
                            Member List
                        </h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn icon icon-left btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#add"><i class="bi bi-plus-lg"></i> Add</button>
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-1">Photo</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th class="col-1">Status</th>
                                    <th class="col-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($websites as $key => $website)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src={{ asset('storage/image/photo_member/' . $website->photo) }} alt=""
                                                style="width: 100px; height: 150px; object-fit: cover"></td>
                                        <td>{{ $website->full_name }}</td>
                                        <td>{{ $website->address }}</td>
                                        <td>{{ $website->status }}</td>
                                        <td>
                                            <a href="#" class="btn icon btn-success" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit{{ $website->id }}"><i
                                                    class="bi bi-pencil-fill"></i></a>

                                            <form action="{{ route('delete.member', $website->id) }}" class="d-inline"
                                                method="POST">
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
                        @include('division.forms')
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
