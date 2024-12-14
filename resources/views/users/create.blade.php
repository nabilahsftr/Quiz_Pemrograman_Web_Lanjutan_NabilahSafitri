@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_email" class="form-label">Email</label>
            <input type="email" name="user_email" id="user_email" class="form-control" value="{{ old('user_email') }}" required>
        </div>
        <div class="mb-3">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" name="user_password" id="user_password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="user_nama" class="form-label">Nama</label>
            <input type="text" name="user_nama" id="user_nama" class="form-control" value="{{ old('user_nama') }}" required>
        </div>
        <div class="mb-3">
            <label for="user_alamat" class="form-label">Alamat</label>
            <textarea name="user_alamat" id="user_alamat" class="form-control" required>{{ old('user_alamat') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="user_hp" class="form-label">Nomor HP</label>
            <input type="text" name="user_hp" id="user_hp" class="form-control" value="{{ old('user_hp') }}" required>
        </div>
        <div class="mb-3">
            <label for="user_pos" class="form-label">Kode Pos</label>
            <input type="text" name="user_pos" id="user_pos" class="form-control" value="{{ old('user_pos') }}" required>
        </div>
        <div class="mb-3">
            <label for="user_role" class="form-label">Role</label>
            <select name="user_role" id="user_role" class="form-select" required>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="user_aktif" class="form-label">Status Aktif</label>
            <select name="user_aktif" id="user_aktif" class="form-select" required>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
