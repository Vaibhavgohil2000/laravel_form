<!DOCTYPE html>
@extends('layout')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @section('content')
        <main class="login-form">

            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Login</div>
                            <div class="card-body">
                                <form action="{{ 'post-login' }}" method="post">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email address" class="col-md-4 col-form label text-md right">E-mail
                                            Address</label>
                                        <div class="col-md-6">
                                            <input type="text" name="email" id="email_address" value="{{old('email')}}"
                                                class="form-control @error('email', 'post') is-invalid @enderror autofocus">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form label text-md right">password</label>
                                        <div class="col-md-6">
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password', 'post') is-invalid @enderror  autofocus">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember">Remember Me 
                                            </label>
                                        </div>

                                    </div>
                                </div> --}}
                                    <div class="md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
</body>

</html>
