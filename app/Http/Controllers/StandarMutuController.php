<?php

namespace App\Http\Controllers;

use App\Models\StandarMutu;
use Illuminate\Http\Request;

class StandarMutuController extends Controller
{
    public function index()
    {
        $standars = StandarMutu::paginate(10);
        return view('standar-mutu.index', compact('standars'));
    }

    public function create()
    {
        return view('standar-mutu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_standar' => 'required|max:100',
            'kategori' => 'required|max:50',
            'deskripsi' => 'nullable'
        ]);

        StandarMutu::create($request->all());
        return redirect()->route('standar-mutu.index')->with('success', 'Standar mutu berhasil ditambahkan');
    }

    public function edit(StandarMutu $standarMutu)
    {
        return view('standar-mutu.edit', compact('standarMutu'));
    }

    public function update(Request $request, StandarMutu $standarMutu)
    {
        $request->validate([
            'nama_standar' => 'required|max:100',
            'kategori' => 'required|max:50',
            'deskripsi' => 'nullable'
        ]);

        $standarMutu->update($request->all());
        return redirect()->route('standar-mutu.index')->with('success', 'Standar mutu berhasil diupdate');
    }

    public function destroy(StandarMutu $standarMutu)
    {
        $standarMutu->delete();
        return redirect()->route('standar-mutu.index')->with('success', 'Standar mutu berhasil dihapus');
    }
}