@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->user_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="user_email" class="form-label">Email</label>
            <input type="email" name="user_email" id="user_email" class="form-control" value="{{ $user->user_email }}" required>
        </div>
        <div class="mb-3">
            <label for="user_nama" class="form-label">Nama</label>
            <input type="text" name="user_nama" id="user_nama" class="form-control" value="{{ $user->user_nama }}" required>
        </div>
        <div class="mb-3">
            <label for="user_alamat" class="form-label">Alamat</label>
            <textarea name="user_alamat" id="user_alamat" class="form-control" required>{{ $user->user_alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="user_hp" class="form-label">Nomor HP</label>
            <input type="text" name="user_hp" id="user_hp" class="form-control" value="{{ $user->user_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="user_pos" class="form-label">Kode Pos</label>
            <input type="text" name="user_pos" id="user_pos" class="form-control" value="{{ $user->user_pos }}" required>
        </div>
        <div class="mb-3">
            <label for="user_role" class="form-label">Role</label>
            <select name="user_role" id="user_role" class="form-select" required>
                <option value="1" {{ $user->user_role == 1 ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ $user->user_role == 2 ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="user_aktif" class="form-label">Status Aktif</label>
            <select name="user_aktif" id="user_aktif" class="form-select" required>
                <option value="1" {{ $user->user_aktif == 1 ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ $user->user_aktif == 0 ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
