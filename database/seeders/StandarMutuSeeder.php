<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StandarMutu;

class StandarMutuSeeder extends Seeder
{
    public function run(): void
    {
        $standars = [
            ['nama_standar' => 'Standar Akademik', 'kategori' => 'Akademik', 'deskripsi' => 'Standar mutu untuk kegiatan akademik'],
            ['nama_standar' => 'Standar Penelitian', 'kategori' => 'Akademik', 'deskripsi' => 'Standar mutu untuk kegiatan penelitian'],
            ['nama_standar' => 'Standar Pengabdian', 'kategori' => 'Non-Akademik', 'deskripsi' => 'Standar mutu untuk pengabdian masyarakat'],
            ['nama_standar' => 'Standar Manajemen', 'kategori' => 'Manajemen', 'deskripsi' => 'Standar mutu untuk manajemen institusi'],
            ['nama_standar' => 'Standar Keuangan', 'kategori' => 'Manajemen', 'deskripsi' => 'Standar mutu untuk pengelolaan keuangan']
        ];

        foreach ($standars as $standar) {
            StandarMutu::create($standar);
        }
    }
}