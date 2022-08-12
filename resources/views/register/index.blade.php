@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
            <form action="/register" method="POST" class="form-registration">
                @csrf

                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name"
                    class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="Name" required
                    value="{{ old('name') }}" autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username"
                    class="form-control @error('username') is-invalid @enderror" placeholder="Username" required autofocus
                    value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="email" class="sr-only">Email address</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required
                    value="{{ old('email') }}" autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password"
                    class="form-control rounded-bottom @error('password') is-invalid @enderror" placeholder="Password"
                    required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-1"><a href="/login">Login</a></small>
        </div>
    </div>
@endsection
