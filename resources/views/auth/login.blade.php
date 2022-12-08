@extends('auth.layouts.auth')

@section('content')
    <div id="auth">

        <div class="card-login col-lg-4 col-12">
            <h1 class="text-center">Log in.</h1>
            <p class="text-center mb-5" style="font-size: 1.5rem">Please login to continue</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl @error('email') is-invalid @enderror"
                        placeholder="Email" value="{{ old('email') }}" required autocomplete="email" required name="email"
                        autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-icon">
                        <i class="bi bi-person" style="margin-left: 2px;"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password"
                        class="form-control form-control-xl  @error('password') is-invalid @enderror" placeholder="Password"
                        required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock" style="margin-left: 2px;"></i>
                    </div>
                </div>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
            </form>
        </div>
    </div>
@endsection
