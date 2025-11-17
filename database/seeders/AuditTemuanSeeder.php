<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AuditTemuan;

class AuditTemuanSeeder extends Seeder
{
    public function run(): void
    {
        $temuans = [
            ['audit_id' => 1, 'jenis_temuan' => 'Non-Conformity', 'deskripsi_temuan' => 'Dokumentasi tidak lengkap pada proses pembelajaran', 'tingkat_risiko' => 'Sedang'],
            ['audit_id' => 1, 'jenis_temuan' => 'Observation', 'deskripsi_temuan' => 'Perlu peningkatan fasilitas laboratorium', 'tingkat_risiko' => 'Rendah'],
            ['audit_id' => 2, 'jenis_temuan' => 'Non-Conformity', 'deskripsi_temuan' => 'Keterlambatan dalam pelaporan kinerja dosen', 'tingkat_risiko' => 'Tinggi'],
            ['audit_id' => 2, 'jenis_temuan' => 'Opportunity', 'deskripsi_temuan' => 'Potensi peningkatan sistem informasi akademik', 'tingkat_risiko' => 'Rendah']
        ];

        foreach ($temuans as $temuan) {
            AuditTemuan::create($temuan);
        }
    }
}