<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        $units = [
            ['nama_unit' => 'Fakultas Teknik', 'tipe_unit' => 'Fakultas', 'pimpinan' => 'Dr. Ahmad Susanto'],
            ['nama_unit' => 'Fakultas Ekonomi', 'tipe_unit' => 'Fakultas', 'pimpinan' => 'Prof. Siti Nurhaliza'],
            ['nama_unit' => 'Bagian Akademik', 'tipe_unit' => 'Bagian', 'pimpinan' => 'Drs. Budi Santoso'],
            ['nama_unit' => 'Bagian Keuangan', 'tipe_unit' => 'Bagian', 'pimpinan' => 'Ir. Maya Sari'],
            ['nama_unit' => 'Pusat Komputer', 'tipe_unit' => 'Pusat', 'pimpinan' => 'Dr. Eko Prasetyo']
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}