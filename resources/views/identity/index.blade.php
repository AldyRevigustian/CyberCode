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
                        <h3>Identity</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Identity</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @include('message')
            </div>
            <section class="section mt-3 row">
                <div class="col-7 card shadow-sm">
                    <div class="card-header" style="padding-bottom: 0px">
                        <h5>
                            Identity Form
                        </h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('edit.identity') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <label>Company Name : </label>
                            <div class="form-group">
                                <input type="text" placeholder="Name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                                    value=" {{ $identity->name }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>

                            <label>Company Logo : </label>
                            <div class="form-group">
                                <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image"
                                    value="{{ old('image') }}" type="file" accept="image/*" id="imgInp">
                                <div class="invalid-feedback">
                                    {{ $errors->first('image') }}
                                </div>
                            </div>

                            <label>Address : </label>
                            <div class="form-group">
                                <textarea name="address" cols="10" rows="5" class="form-control" placeholder="Company Address"> {{ $identity->address }}</textarea>
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            </div>

                            <label>Email : </label>
                            <div class="form-group">
                                <input type="email" placeholder="Email"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                    value=" {{ $identity->email }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            </div>

                            <label>Phone : </label>
                            <div class="form-group">
                                <input type="phone" placeholder="phone"
                                    class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone"
                                    value=" {{ $identity->phone }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            </div>

                            <label>Instagram Account : </label>
                            <div class="form-group">
                                <input type="instagram" placeholder="instagram"
                                    class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}"
                                    name="instagram" value=" {{ $identity->instagram }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('instagram') }}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-1">
                                <span class="d-none d-sm-block">Save</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-4 card shadow-sm">
                    <div class="card-header" style="padding-bottom: 0px">
                        <h5>
                            Identity
                        </h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <center><img src={{ asset('storage/image/logo/' . $identity->logo) }} alt=""
                                style="width: 200px; height: 80px;"></center>
                        <div class="row mt-5">
                            <div class="col-6">
                                <h5>Company Name</h5>
                            </div>
                            <div class="col-6">
                                <h5> {{ $identity->name }}</h5>
                            </div>
                            <div class="col-6">
                                <p>Email</p>
                            </div>
                            <div class="col-6">
                                <p> {{ $identity->email }}</p>
                            </div>
                            <div class="col-6">
                                <p>Phone</p>
                            </div>
                            <div class="col-6">
                                <p> {{ $identity->phone }}</p>
                            </div>
                            <div class="col-6">
                                <p>Instagram</p>
                            </div>
                            <div class="col-6">
                                <p> {{ $identity->instagram }}</p>
                            </div>
                            <div class="col-6">
                                <p>Address</p>
                            </div>
                            <div class="col-6">
                                <p> {{ $identity->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
