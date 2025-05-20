<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus.');
    }
}
