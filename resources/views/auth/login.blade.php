<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="card" style="width: 350px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Enter your email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
