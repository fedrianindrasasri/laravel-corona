@extends('layouts.auth')

@section('title')
<title>Admin COVID-RIAU | Login</title>
@endsection

@section('form')
<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Masuk</p>

            <form action="{{ route('login') }}" method="post">
                @csrf

                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="input-group mb-3">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        placeholder="Email / Username" name="username" value="{{ old('username') }}" autofocus required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror



                <div class="row">
                    <div class="col-8">

                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
