<?php

namespace App\Http\Controllers;

use App\Models\AuditTemuan;
use App\Models\Audit;
use Illuminate\Http\Request;

class AuditTemuanController extends Controller
{
    public function index()
    {
        $temuans = AuditTemuan::with('audit')->paginate(10);
        return view('audit-temuan.index', compact('temuans'));
    }

    public function create()
    {
        $audits = Audit::all();
        return view('audit-temuan.create', compact('audits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'audit_id' => 'required|exists:audit,audit_id',
            'jenis_temuan' => 'required|max:50',
            'deskripsi_temuan' => 'required',
            'tingkat_risiko' => 'required|max:20'
        ]);

        AuditTemuan::create($request->all());
        return redirect()->route('audit-temuan.index')->with('success', 'Temuan audit berhasil ditambahkan');
    }

    public function edit(AuditTemuan $auditTemuan)
    {
        $audits = Audit::all();
        return view('audit-temuan.edit', compact('auditTemuan', 'audits'));
    }

    public function update(Request $request, AuditTemuan $auditTemuan)
    {
        $request->validate([
            'audit_id' => 'required|exists:audit,audit_id',
            'jenis_temuan' => 'required|max:50',
            'deskripsi_temuan' => 'required',
            'tingkat_risiko' => 'required|max:20'
        ]);

        $auditTemuan->update($request->all());
        return redirect()->route('audit-temuan.index')->with('success', 'Temuan audit berhasil diupdate');
    }

    public function destroy(AuditTemuan $auditTemuan)
    {
        $auditTemuan->delete();
        return redirect()->route('audit-temuan.index')->with('success', 'Temuan audit berhasil dihapus');
    }
}