<?php

namespace App\Http\Controllers;

use App\Models\IndikatorKinerja;
use App\Models\StandarMutu;
use Illuminate\Http\Request;

class IndikatorKinerjaController extends Controller
{
    public function index()
    {
        $indikators = IndikatorKinerja::with('standar')->paginate(10);
        return view('indikator-kinerja.index', compact('indikators'));
    }

    public function create()
    {
        $standars = StandarMutu::all();
        return view('indikator-kinerja.create', compact('standars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'standar_id' => 'required|exists:standar_mutu,standar_id',
            'nama_indikator' => 'required|max:150',
            'target' => 'required|numeric',
            'status' => 'required|max:30'
        ]);

        IndikatorKinerja::create($request->all());
        return redirect()->route('indikator-kinerja.index')->with('success', 'Indikator kinerja berhasil ditambahkan');
    }

    public function edit(IndikatorKinerja $indikatorKinerja)
    {
        $standars = StandarMutu::all();
        return view('indikator-kinerja.edit', compact('indikatorKinerja', 'standars'));
    }

    public function update(Request $request, IndikatorKinerja $indikatorKinerja)
    {
        $request->validate([
            'standar_id' => 'required|exists:standar_mutu,standar_id',
            'nama_indikator' => 'required|max:150',
            'target' => 'required|numeric',
            'status' => 'required|max:30'
        ]);

        $indikatorKinerja->update($request->all());
        return redirect()->route('indikator-kinerja.index')->with('success', 'Indikator kinerja berhasil diupdate');
    }

    public function destroy(IndikatorKinerja $indikatorKinerja)
    {
        $indikatorKinerja->delete();
        return redirect()->route('indikator-kinerja.index')->with('success', 'Indikator kinerja berhasil dihapus');
    }
}