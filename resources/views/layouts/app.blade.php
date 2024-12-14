<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi CRUD Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Quiz Pemrograman Web Lanjutan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('users.index') }}">Daftar User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('users.create') }}">Tambah User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('golongan.index') }}">Daftar Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('golongan.create') }}">Tambah Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pelanggan.index') }}">Daftar Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pelanggan.create') }}">Tambah Pelanggan</a>
                    </li>
                </ul>
            </div>
            @if (auth()->check())
                <form action="{{ route('logout') }}" method="POST" class="ms-3">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            @endif
        </div>
    </nav>

    <div class="container mt-4 bg-white p-4 rounded shadow-sm">
        @yield('content')
    </div>

    <footer class="bg-secondary text-light text-center py-3 mt-4">
        <p>Quiz Pemrograman Web Lanjutan &copy; {{ date('Y') }} By Nabilah Safitri.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
