<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\Users;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all(); 
        return view('pelanggan.index', compact('pelanggan')); 
    }

    public function create()
    {
        $golongan = Golongan::all();
        $users = Users::all();
        return view('pelanggan.create', compact('golongan', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pel_id_gol' => 'required|integer|exists:tb_golongan,gol_id',
            'pel_no' => 'required|string|max:20|unique:tb_pelanggan,pel_no',
            'pel_nama' => 'required|string|max:50',
            'pel_alamat' => 'required|string',
            'pel_hp' => 'required|string|max:20',
            'pel_ktp' => 'required|string|max:50',
            'pel_seri' => 'required|string|max:50',
            'pel_meteran' => 'required|integer',
            'pel_aktif' => 'required|in:Y,N',
            'pel_id_user' => 'required|integer|exists:tb_users,user_id',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id); 
        $golongan = Golongan::all(); 
        $users = Users::all(); 
        return view('pelanggan.edit', compact('pelanggan', 'golongan', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pel_id_gol' => 'required|integer|exists:tb_golongan,gol_id',
            'pel_no' => 'required|string|max:20|unique:tb_pelanggan,pel_no,' . $id . ',pel_id',
            'pel_nama' => 'required|string|max:50',
            'pel_alamat' => 'required|string',
            'pel_hp' => 'required|string|max:20',
            'pel_ktp' => 'required|string|max:50',
            'pel_seri' => 'required|string|max:50',
            'pel_meteran' => 'required|integer',
            'pel_aktif' => 'required|in:Y,N',
            'pel_id_user' => 'required|integer|exists:tb_users,user_id',
        ]);

        $pelanggan = Pelanggan::findOrFail($id); 
        $pelanggan->update($request->all()); 

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id); 
        $pelanggan->delete(); 

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus');
    }
}
