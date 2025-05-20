<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumen = Dokumen::all();
        return view('dokumen.index', compact('dokumen'));
    }

    public function create()
    {
        return view('dokumen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_dokumen' => 'required',
            'no_kerja_sama' => 'required',
            'status' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'dokumen' => 'required|file|mimes:pdf,doc,docx'
        ]);

        $file = $request->file('dokumen');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('dokumen', $fileName, 'public');

        Dokumen::create([
            'id_dokumen' => $request->id_dokumen,
            'no_kerja_sama' => $request->no_kerja_sama,
            'status' => $request->status,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'dokumen' => $filePath,
        ]);

        return redirect('/dokumen')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id_dokumen)
    {
        $dokumen = Dokumen::where('id_dokumen', $id_dokumen)->firstOrFail();
        return view('dokumen.edit', compact('dokumen'));
    }

    public function update(Request $request, $id_dokumen)
    {
        $request->validate([
            'id_dokumen' => 'required',
            'no_kerja_sama' => 'required',
            'status' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx'
        ]);

        $dokumen = Dokumen::where('id_dokumen', $id_dokumen)->firstOrFail();

        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('dokumen', $fileName, 'public');

            if ($dokumen->dokumen && Storage::disk('public')->exists($dokumen->dokumen)) {
                Storage::disk('public')->delete($dokumen->dokumen);
            }

            $dokumen->dokumen = $filePath;
        }

        $dokumen->id_dokumen = $request->id_dokumen;
        $dokumen->no_kerja_sama = $request->no_kerja_sama;
        $dokumen->status = $request->status;
        $dokumen->tanggal_mulai = $request->tanggal_mulai;
        $dokumen->tanggal_selesai = $request->tanggal_selesai;

        $dokumen->save();

        return redirect('/dokumen')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id_dokumen)
    {
        $dokumen = Dokumen::findOrFail($id_dokumen);
        if ($dokumen->dokumen && Storage::disk('public')->exists($dokumen->dokumen)) {
            Storage::disk('public')->delete($dokumen->dokumen);
        }
        $dokumen->delete();
        return redirect('/dokumen')->with('success', 'Data berhasil dihapus.');
    }
}
