<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Audit;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::with(['audit', 'pembuat'])->paginate(10);
        return view('laporan.index', compact('laporans'));
    }

    public function create()
    {
        $audits = Audit::all();
        return view('laporan.create', compact('audits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'audit_id' => 'required|exists:audit,audit_id',
            'periode' => 'required|max:20',
            'hasil_ringkas' => 'required',
            'tanggal_laporan' => 'required|date'
        ]);

        $data = $request->all();
        $data['dibuat_oleh'] = auth()->id();
        
        Laporan::create($data);
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditambahkan');
    }

    public function edit(Laporan $laporan)
    {
        $audits = Audit::all();
        return view('laporan.edit', compact('laporan', 'audits'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'audit_id' => 'required|exists:audit,audit_id',
            'periode' => 'required|max:20',
            'hasil_ringkas' => 'required',
            'tanggal_laporan' => 'required|date'
        ]);

        $laporan->update($request->all());
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diupdate');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus');
    }
}