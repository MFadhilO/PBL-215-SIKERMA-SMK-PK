<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\unit_pengaju;
class unit_pengajuController extends Controller
{
    public function index()
    {
        $unit_pengaju = unit_pengaju::all();
        return view('unit_pengaju.index', compact('unit_pengaju'));
    }

    public function create()
    {
        return view('unit_pengaju.create');
    }

    public function store(Request $request)
    {
        unit_pengaju::create($request->all());
        return redirect('/unit_pengaju')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $unit_pengaju = unit_pengaju::where('id_unit', $id_unit)->firstOrFail();
        return view('unit_pengaju.edit', compact('unit_pengaju'));
    }

    public function update(Request $request, $nim)
    {
        $unit_pengaju = unit_pengaju::where('id_unit', $id_unit)->firstOrFail();
        $unit_pengaju->update($request->all());
        return redirect('/unit_pengaju')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id_unit)
    {
        $unit_pengaju = unit_pengaju::where('id_unit', $id_unit)->firstOrFail();
        $unit_pengaju->delete();
        return redirect('/unit_pengaju')->with('success', 'Data berhasil dihapus.');
    }
}
