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
                        <h3>Categories</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Customer</li>
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                            List Categories
                        </h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn icon icon-left btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#add"><i class="bi bi-plus-lg"></i> Add</button>
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th class="col-1">No.</th>
                                    <th>Category</th>
                                    <th class="col-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $index => $category)
                                    <tr>
                                        <td>{{ $index += 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="#" class="btn icon btn-success" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $category->id }}"><i
                                                    class="bi bi-pencil-fill"></i></a>

                                            <form action="{{ route('delete.category', $category->id) }}" class="d-inline"
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
                        @include('category.forms')
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
