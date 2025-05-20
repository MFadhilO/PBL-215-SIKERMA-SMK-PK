<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kerja_sama;

class kerja_samaController extends Controller
{
    public function index()
    {
        $kerjasama = kerja_sama::all();
        return view('kerja_sama.index', compact('kerjasama'));
    }

    public function create()
    {
        return view('kerja_sama.create');
    }

    public function store(Request $request)
    {
        kerja_sama::create($request->all());
        return redirect('/kerja_sama')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id_kerja_sama)
    {
        $kerjasama = kerja_sama::findOrFail($id_kerja_sama);
        return view('kerja_sama.edit', compact('kerjasama'));
    }

    public function update(Request $request, $id_kerja_sama)
    {
        $kerjasama = kerja_sama::findOrFail($id_kerja_sama);
        $kerjasama->update($request->all());
        return redirect('/kerja_sama')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id_kerja_sama)
    {
        $kerjasama = kerja_sama::findOrFail($id_kerja_sama);
        $kerjasama->delete();
        return redirect('/kerja_sama')->with('success', 'Data berhasil dihapus.');
    }
}
