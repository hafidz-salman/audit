<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laporan;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        $laporans = [
            ['audit_id' => 1, 'periode' => '2024-1', 'hasil_ringkas' => 'Audit periode 1 menunjukkan capaian yang baik dengan beberapa area perbaikan', 'total_kinerja' => 85.50, 'rekomendasi_umum' => 'Perbaiki dokumentasi dan tingkatkan fasilitas', 'dibuat_oleh' => 1, 'tanggal_laporan' => '2024-01-25'],
            ['audit_id' => 2, 'periode' => '2024-1', 'hasil_ringkas' => 'Perlu peningkatan dalam sistem pelaporan dan manajemen waktu', 'total_kinerja' => 78.25, 'rekomendasi_umum' => 'Implementasi sistem otomatis dan pelatihan SDM', 'dibuat_oleh' => 2, 'tanggal_laporan' => '2024-01-26']
        ];

        foreach ($laporans as $laporan) {
            Laporan::create($laporan);
        }
    }
}