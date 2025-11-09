<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class KriteriaSeeder extends Seeder
{
    public function run(): void
    {
        $kriterias = [
            [
                'indikator_id' => 1,
                'nama_kriteria' => 'Persentase Kelulusan Tepat Waktu',
                'deskripsi' => 'Mahasiswa yang lulus sesuai masa studi normal',
                'bobot' => 60.00,
                'nilai_target' => 85.00,
                'nilai_capaian' => 0.00,
                'status' => 'Aktif'
            ],
            [
                'indikator_id' => 1,
                'nama_kriteria' => 'IPK Rata-rata Lulusan',
                'deskripsi' => 'Indeks Prestasi Kumulatif rata-rata lulusan',
                'bobot' => 40.00,
                'nilai_target' => 3.25,
                'nilai_capaian' => 0.00,
                'status' => 'Aktif'
            ],
            [
                'indikator_id' => 2,
                'nama_kriteria' => 'Skor Kepuasan Pembelajaran',
                'deskripsi' => 'Skor kepuasan mahasiswa terhadap proses pembelajaran',
                'bobot' => 100.00,
                'nilai_target' => 80.00,
                'nilai_capaian' => 0.00,
                'status' => 'Aktif'
            ]
        ];

        foreach ($kriterias as $kriteria) {
            Kriteria::create($kriteria);
        }
    }
}