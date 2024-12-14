<?php

namespace App\Http\Controllers;
use App\Models\Golongan; 
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $golongan = Golongan::all(); 
        return view('golongan.index', compact('golongan')); 
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gol_kode' => 'required|string|max:10',
            'gol_nama' => 'required|string|max:50',
        ]);

        Golongan::create($request->all());

        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil ditambahkan');
    }

    public function edit($id)
{
    $golongan = Golongan::findOrFail($id);  

    return view('golongan.edit', compact('golongan'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'gol_kode' => 'required|string|max:10',
        'gol_nama' => 'required|string|max:50',
    ]);

    $golongan = Golongan::findOrFail($id);

    $golongan->update($request->only('gol_kode', 'gol_nama')); 

    return redirect()->route('golongan.index')->with('success', 'Golongan berhasil diperbarui');
}

public function destroy($id)
{
    $golongan = Golongan::findOrFail($id);

    $golongan->delete();

    return redirect()->route('golongan.index')->with('success', 'Golongan berhasil dihapus');
}

}