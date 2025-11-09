<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IndikatorKinerja;

class IndikatorKinerjaSeeder extends Seeder
{
    public function run(): void
    {
        $indikators = [
            [
                'standar_id' => 1,
                'nama_indikator' => 'Tingkat Kelulusan Mahasiswa',
                'target' => 85.00,
                'status' => 'Aktif'
            ],
            [
                'standar_id' => 1,
                'nama_indikator' => 'Kepuasan Mahasiswa terhadap Pembelajaran',
                'target' => 80.00,
                'status' => 'Aktif'
            ],
            [
                'standar_id' => 2,
                'nama_indikator' => 'Jumlah Publikasi Ilmiah',
                'target' => 50.00,
                'status' => 'Aktif'
            ],
            [
                'standar_id' => 3,
                'nama_indikator' => 'Jumlah Kegiatan Pengabdian',
                'target' => 20.00,
                'status' => 'Aktif'
            ],
            [
                'standar_id' => 4,
                'nama_indikator' => 'Waktu Pelayanan Administrasi',
                'target' => 3.00,
                'status' => 'Aktif'
            ]
        ];

        foreach ($indikators as $indikator) {
            IndikatorKinerja::create($indikator);
        }
    }
}