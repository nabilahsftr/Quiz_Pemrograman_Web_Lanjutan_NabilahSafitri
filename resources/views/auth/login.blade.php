<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg border-0" style="width: 400px; background-color: #f8f9fa;">
            <div class="card-header text-center bg-secondary text-white">
                <h3 class="card-title mb-0">Login</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('authenticate') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required style="background-color: #e9ecef;">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-secondary">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required style="background-color: #e9ecef;">
                    </div>
                    <button type="submit" class="btn btn-secondary w-100">Login</button>
                </form>
            </div>
            <div class="card-footer text-center bg-secondary text-white">
                <a href="#" class="text-decoration-none text-white">Lupa Password?</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
