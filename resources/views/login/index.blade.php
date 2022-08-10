@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1 class="h3 mb-3 font-weight-normal text-center">Please Log in</h1>
            <form class="form-signin">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            </form>
            <small class="d-block text-center mt-1"><a href="/register">Register here</a></small>
        </div>
    </div>
@endsection
