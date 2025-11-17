<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class KriteriaSeeder extends Seeder
{
    public function run(): void
    {
        $kriterias = [
            ['nama_kriteria' => 'Kualitas Pembelajaran', 'bobot' => 25.00, 'deskripsi' => 'Kriteria penilaian kualitas pembelajaran'],
            ['nama_kriteria' => 'Kompetensi Dosen', 'bobot' => 20.00, 'deskripsi' => 'Kriteria penilaian kompetensi dosen'],
            ['nama_kriteria' => 'Fasilitas Pendukung', 'bobot' => 15.00, 'deskripsi' => 'Kriteria penilaian fasilitas pendukung'],
            ['nama_kriteria' => 'Kepuasan Mahasiswa', 'bobot' => 20.00, 'deskripsi' => 'Kriteria penilaian kepuasan mahasiswa'],
            ['nama_kriteria' => 'Lulusan Berkualitas', 'bobot' => 20.00, 'deskripsi' => 'Kriteria penilaian kualitas lulusan']
        ];

        foreach ($kriterias as $kriteria) {
            Kriteria::create($kriteria);
        }
    }
}