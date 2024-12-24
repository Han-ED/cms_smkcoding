@extends('layouts.main')
@section('container')

    <body>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card shadow-lg p-4" style="width: 25rem;">
                <h4 class="text-center mb-4">Login</h4>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <div class="text-center mt-3">
                        <a href="{{ route('auth.register') }}" class="text-decoration-none">Don't have an
                            account? Register here</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
