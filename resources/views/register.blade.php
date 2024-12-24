@extends('layouts.main')
@section('container')

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 25rem;">
            <h4 class="text-center mb-4">Register</h4>
            <form action="{{route ('auth.signup')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
                <div class="text-center mt-3">
                    <a href="{{ route('auth.login') }}" class="text-decoration-none" href="{{route ('auth.login')}}">Already have an account? Login here</a>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
