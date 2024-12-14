@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Tambah Pelanggan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="pel_no" class="form-label">Nomor Pelanggan</label>
            <input type="text" name="pel_no" id="pel_no" class="form-control" value="{{ old('pel_no') }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_nama" class="form-label">Nama Pelanggan</label>
            <input type="text" name="pel_nama" id="pel_nama" class="form-control" value="{{ old('pel_nama') }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_alamat" class="form-label">Alamat</label>
            <textarea name="pel_alamat" id="pel_alamat" class="form-control" rows="3" required>{{ old('pel_alamat') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="pel_hp" class="form-label">No. HP</label>
            <input type="text" name="pel_hp" id="pel_hp" class="form-control" value="{{ old('pel_hp') }}">
        </div>

        <div class="mb-3">
            <label for="pel_ktp" class="form-label">No. KTP</label>
            <input type="text" name="pel_ktp" id="pel_ktp" class="form-control" value="{{ old('pel_ktp') }}">
        </div>

        <div class="mb-3">
            <label for="pel_seri" class="form-label">Seri</label>
            <input type="text" name="pel_seri" id="pel_seri" class="form-control" value="{{ old('pel_seri') }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_meteran" class="form-label">Meteran</label>
            <input type="number" name="pel_meteran" id="pel_meteran" class="form-control" value="{{ old('pel_meteran') }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_aktif" class="form-label">Status Aktif</label>
            <select class="form-select" id="pel_aktif" name="pel_aktif" required>
                <option value="Y" {{ old('pel_aktif') == 'Y' ? 'selected' : '' }}>Ya</option>
                <option value="N" {{ old('pel_aktif') == 'N' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="pel_id_gol" class="form-label">Golongan</label>
            <select class="form-select" id="pel_id_gol" name="pel_id_gol" required>
                <option value="" disabled selected>Pilih Golongan</option>
                @foreach ($golongan as $gol)
                    <option value="{{ $gol->gol_id }}" {{ old('pel_id_gol') == $gol->gol_id ? 'selected' : '' }}>
                        {{ $gol->gol_nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="pel_id_user" class="form-label">User</label>
            <select class="form-select" id="pel_id_user" name="pel_id_user" required>
                <option value="" disabled selected>Pilih User</option>
                @foreach ($users as $user)
                    <option value="{{ $user->user_id }}" {{ old('pel_id_user') == $user->user_id ? 'selected' : '' }}>
                        {{ $user->user_nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
