<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center text-primary mb-4">Login</h2>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    class="form-control" 
                                    required 
                                    value="{{ old('email') }}"
                                    placeholder="Enter your email">
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input 
                                    type="password" 
                                    name="password" 
                                    class="form-control" 
                                    required 
                                    placeholder="Enter your password">
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Log in</button>

                            <!-- Error Handling -->
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
