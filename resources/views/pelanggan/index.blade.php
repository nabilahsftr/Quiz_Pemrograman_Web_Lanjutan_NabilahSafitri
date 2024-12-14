@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Pelanggan</h1>
    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>HP</th>
                <th>KTP</th>
                <th>Seri</th>
                <th>Meteran</th>
                <th>Status</th>
                <th>Golongan</th>
                <th>User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->pel_no }}</td>
                    <td>{{ $p->pel_nama }}</td>
                    <td>{{ $p->pel_alamat }}</td>
                    <td>{{ $p->pel_hp }}</td>
                    <td>{{ $p->pel_ktp }}</td>
                    <td>{{ $p->pel_seri }}</td>
                    <td>{{ $p->pel_meteran }}</td>
                    <td>{{ $p->pel_aktif =='Y'?'Aktif':'Non-Aktif'}}</td>
                    <td>{{ $p->golongan->gol_nama ?? '-' }}</td>
                    <td>{{ $p->user->user_nama ?? '-' }}</td>
                    <td>
                        <a href="{{ route('pelanggan.edit', $p->pel_id) }}" class="btn btn-danger btn-sm">Edit</a>
                        <form action="{{ route('pelanggan.destroy', $p->pel_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<td>
    @if ($p->users)
        {{ $p->user->user_nama }}
    @else
        -
    @endif
</td>
