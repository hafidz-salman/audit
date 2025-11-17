<?php

namespace App\Http\Controllers;

use App\Models\DataKinerja;
use App\Models\IndikatorKinerja;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class DataKinerjaController extends Controller
{
    public function index()
    {
        $dataKinerja = DataKinerja::with(['indikator', 'kriteria', 'user'])->paginate(10);
        return view('data-kinerja.index', compact('dataKinerja'));
    }

    public function create()
    {
        $indikators = IndikatorKinerja::all();
        $kriterias = Kriteria::all();
        return view('data-kinerja.create', compact('indikators', 'kriterias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'indikator_id' => 'required|exists:indikator_kinerja,indikator_id',
            'kriteria_id' => 'required|exists:kriteria,kriteria_id',
            'periode' => 'required|max:20',
            'capaian' => 'required|numeric',
            'status' => 'required|max:30'
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();
        
        DataKinerja::create($data);
        return redirect()->route('data-kinerja.index')->with('success', 'Data kinerja berhasil ditambahkan');
    }

    public function edit(DataKinerja $dataKinerja)
    {
        $indikators = IndikatorKinerja::all();
        $kriterias = Kriteria::all();
        return view('data-kinerja.edit', compact('dataKinerja', 'indikators', 'kriterias'));
    }

    public function update(Request $request, DataKinerja $dataKinerja)
    {
        $request->validate([
            'indikator_id' => 'required|exists:indikator_kinerja,indikator_id',
            'kriteria_id' => 'required|exists:kriteria,kriteria_id',
            'periode' => 'required|max:20',
            'capaian' => 'required|numeric',
            'status' => 'required|max:30'
        ]);

        $dataKinerja->update($request->all());
        return redirect()->route('data-kinerja.index')->with('success', 'Data kinerja berhasil diupdate');
    }

    public function destroy(DataKinerja $dataKinerja)
    {
        $dataKinerja->delete();
        return redirect()->route('data-kinerja.index')->with('success', 'Data kinerja berhasil dihapus');
    }
}