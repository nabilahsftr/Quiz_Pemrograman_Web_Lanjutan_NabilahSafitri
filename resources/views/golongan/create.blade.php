@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Golongan</h1>

    <form action="{{ route('golongan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="gol_kode">Kode Golongan</label>
            <input type="text" class="form-control" name="gol_kode" id="gol_kode" required>
        </div>

        <div class="form-group">
            <label for="gol_nama">Nama Golongan</label>
            <input type="text" class="form-control" name="gol_nama" id="gol_nama" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('golongan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
