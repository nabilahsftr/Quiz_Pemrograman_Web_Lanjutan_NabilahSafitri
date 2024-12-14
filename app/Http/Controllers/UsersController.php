<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; 

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $users = Users::all(); 
    return view('users.index', compact('users'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('users.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'user_email' => 'required|email|unique:tb_users',
        'user_password' => 'required|min:8',
        'user_nama' => 'required|string|max:100',
        'user_alamat' => 'required|string',
        'user_hp' => 'required|string|max:25',
        'user_pos' => 'required|string|max:5',
        'user_role' => 'required|integer',
        'user_aktif' => 'required|integer',
    ]);

    Users::create([
        'user_email' => $request->user_email,
        'user_password' => $request->user_password,
        'user_nama' => $request->user_nama,
        'user_alamat' => $request->user_alamat,
        'user_hp' => $request->user_hp,
        'user_pos' => $request->user_pos,
        'user_role' => $request->user_role,
        'user_aktif' => $request->user_aktif,
    ]);

    return redirect()->route('users.index')->with('success', 'Data user berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $user = Users::findOrFail($id);
    return view('users.edit', compact('user'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_email' => 'required|email',
            'user_nama' => 'required|string|max:100',
            'user_alamat' => 'required|string',
            'user_hp' => 'required|string|max:25',
            'user_pos' => 'required|string|max:5',
            'user_role' => 'required|integer',
            'user_aktif' => 'required|integer',
        ]);
    
        $user = Users::findOrFail($id);
        $user->update($request->all());
    
        return redirect()->route('users.index')->with('success', 'Data user berhasil diperbarui');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();
    
        return redirect()->route('users.index')->with('success', 'Data user berhasil dihapus');
    }
}    