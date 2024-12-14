@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar User</h1>

    <!-- Tombol untuk menambah user -->
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah User</a>

    <!-- Tabel untuk menampilkan daftar users -->
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Kode Pos</th>
                <th>Role</th>
                <th>Status Aktif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->user_email }}</td>
                <td>{{ $user->user_nama }}</td>
                <td>{{ $user->user_alamat }}</td>
                <td>{{ $user->user_hp }}</td>
                <td>{{ $user->user_pos }}</td>
                <td>{{ $user->user_role == 1 ? 'Admin' : 'User' }}</td> <!-- Menampilkan 'Admin' atau 'User' -->
                <td>{{ $user->user_aktif == 1 ? 'Aktif' : 'Tidak Aktif' }}</td> <!-- Menampilkan 'Aktif' atau 'Tidak Aktif' -->
                <td>
                    <!-- Tombol Edit -->
                    <a href="{{ route('users.edit', $user->user_id) }}" class="btn btn-danger btn-sm">Edit</a>
                    <!-- Form untuk Hapus -->
                    <form action="{{ route('users.destroy', $user->user_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
