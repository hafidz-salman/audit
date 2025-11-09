<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StandarMutu;

class StandarMutuSeeder extends Seeder
{
    public function run(): void
    {
        $standars = [
            [
                'nama_standar' => 'Standar Akademik',
                'kategori' => 'Pendidikan',
                'deskripsi' => 'Standar mutu untuk kegiatan akademik dan pembelajaran'
            ],
            [
                'nama_standar' => 'Standar Penelitian',
                'kategori' => 'Penelitian',
                'deskripsi' => 'Standar mutu untuk kegiatan penelitian dan publikasi'
            ],
            [
                'nama_standar' => 'Standar Pengabdian',
                'kategori' => 'Pengabdian',
                'deskripsi' => 'Standar mutu untuk kegiatan pengabdian kepada masyarakat'
            ],
            [
                'nama_standar' => 'Standar Administrasi',
                'kategori' => 'Administrasi',
                'deskripsi' => 'Standar mutu untuk pelayanan administrasi'
            ]
        ];

        foreach ($standars as $standar) {
            StandarMutu::create($standar);
        }
    }
}