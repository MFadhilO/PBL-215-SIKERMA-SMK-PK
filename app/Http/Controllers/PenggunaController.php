<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    // Tampilkan semua data pengguna
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('pengguna.index', compact('penggunas'));
    }

    // Tampilkan form tambah pengguna
    public function create()
    {
        return view('pengguna.create');
    }

    // Simpan data pengguna baru
    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required|unique:pengguna,NIP|max:18',
            'id_bagian' => 'required|integer',
            'nama_lengkap' => 'required|string|max:255',
            'kata_sandi' => 'required|string',
            'peran' => 'required|in:Admin,Super admin,Development',
            'status' => 'required|in:aktif,tidak aktif'
        ]);

        Pengguna::create($request->all());

        return redirect()->route('pengguna.index')->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    // Tampilkan form edit
    public function edit($NIP)
    {
        $pengguna = Pengguna::findOrFail($NIP);
        return view('pengguna.edit', compact('pengguna'));
    }

    // Update data pengguna
    public function update(Request $request, $NIP)
    {
        $request->validate([
            'id_bagian' => 'required|integer',
            'nama_lengkap' => 'required|string|max:255',
            'kata_sandi' => 'required|string',
            'peran' => 'required|in:Admin,Super admin,Development',
            'status' => 'required|in:aktif,tidak aktif'
        ]);

        $pengguna = Pengguna::findOrFail($NIP);
        $pengguna->update($request->all());

        return redirect()->route('pengguna.index')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    // Hapus data pengguna
    public function destroy($NIP)
    {
        $pengguna = Pengguna::findOrFail($NIP);
        $pengguna->delete();

        return redirect()->route('pengguna.index')->with('success', 'Data pengguna berhasil dihapus.');
    }
}
