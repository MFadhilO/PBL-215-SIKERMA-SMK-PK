<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Pengguna; // Tambahkan ini

class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::with('pengguna')->get();
        return view('pengajuan.index', compact('pengajuan'));
    }

    public function create()
    {
        $penggunas = Pengguna::where('status', 'aktif')->get(['NIP', 'nama_lengkap']);
        return view('pengajuan.create', compact('penggunas'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'NIP' => 'required|string|max:18|exists:pengguna,NIP',
                'nama_mitra' => 'required|string|max:255',
            ]);

            $validatedData['tanggal_ajuan'] = now()->toDateString();

            Pengajuan::create($validatedData);
            
            return redirect('/pengajuan')->with('success', 'Pengajuan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menambahkan pengajuan: '.$e->getMessage());
        }
    }

    public function edit($id_ajuan)
    {
        $pengajuan = Pengajuan::findOrFail($id_ajuan);
        $penggunas = Pengguna::where('status', 'aktif')->get(['NIP', 'nama_lengkap']);
        return view('pengajuan.edit', compact('pengajuan', 'penggunas'));
    }

    public function update(Request $request, $id_ajuan)
    {
        try {
            $validatedData = $request->validate([
                'NIP' => 'required|string|max:18|exists:pengguna,NIP',
                'nama_mitra' => 'required|string|max:255',
                'tanggal_ajuan' => 'required|date',
            ]);

            $pengajuan = Pengajuan::findOrFail($id_ajuan);
            $pengajuan->update($validatedData);
            
            return redirect('/pengajuan')->with('success', 'Pengajuan berhasil diupdate.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal mengupdate pengajuan: '.$e->getMessage());
        }
    }

    public function destroy($id_ajuan)
    {
        try {
            $pengajuan = Pengajuan::findOrFail($id_ajuan);
            $pengajuan->delete();
            return redirect('/pengajuan')->with('success', 'Pengajuan berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus pengajuan: '.$e->getMessage());
        }
    }
}