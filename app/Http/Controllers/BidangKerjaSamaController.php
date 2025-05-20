<?php

namespace App\Http\Controllers;

use App\Models\bidang_kerja_sama;
use Illuminate\Http\Request;

class BidangKerjaSamaController extends Controller
{
    public function index()
    {
        $bidangs = bidang_kerja_sama::all();
        return view('bidang_kerja_sama.index', compact('bidangs'));
    }

    public function create()
    {
        return view('bidang_kerja_sama.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bidang' => 'required|string|max:255',
        ]);

        bidang_kerja_sama::create([
            'nama_bidang' => $request->nama_bidang,
        ]);

        return redirect()->route('bidang_kerja_sama.index')->with('success', 'Bidang Kerja Sama created successfully.');
    }

    public function edit($id)
    {
        $bidang = bidang_kerja_sama::findOrFail($id);
        return view('bidang_kerja_sama.edit', compact('bidang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bidang' => 'required|string|max:255',
        ]);

        $bidang = bidang_kerja_sama::findOrFail($id);
        $bidang->update([
            'nama_bidang' => $request->nama_bidang,
        ]);

        return redirect()->route('bidang_kerja_sama.index')->with('success', 'Bidang Kerja Sama updated successfully.');
    }

    public function destroy($id)
    {
        $bidang = bidang_kerja_sama::findOrFail($id);
        $bidang->delete();

        return redirect()->route('bidang_kerja_sama.index')->with('success', 'Bidang Kerja Sama deleted successfully.');
    }
}
