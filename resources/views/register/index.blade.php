@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
            <form class="form-registration">

                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="form-control rounded-top" placeholder="Name" required
                    autofocus>

                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required
                    autofocus>

                <label for="email" class="sr-only">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address"
                    required autofocus>

                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control rounded-bottom"
                    placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-1"><a href="/login">Login</a></small>
        </div>
    </div>
@endsection
