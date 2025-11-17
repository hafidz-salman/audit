<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Validasi;

class ValidasiSeeder extends Seeder
{
    public function run(): void
    {
        $validasis = [
            ['kinerja_id' => 1, 'validator_id' => 2, 'tanggal_validasi' => '2024-01-15', 'status_validasi' => 'Disetujui', 'catatan' => 'Data valid dan sesuai'],
            ['kinerja_id' => 2, 'validator_id' => 1, 'tanggal_validasi' => '2024-01-16', 'status_validasi' => 'Disetujui', 'catatan' => 'Capaian baik'],
            ['kinerja_id' => 3, 'validator_id' => 3, 'tanggal_validasi' => '2024-01-17', 'status_validasi' => 'Ditolak', 'catatan' => 'Perlu perbaikan data'],
            ['kinerja_id' => 4, 'validator_id' => 2, 'tanggal_validasi' => '2024-02-15', 'status_validasi' => 'Disetujui', 'catatan' => 'Excellent performance'],
            ['kinerja_id' => 5, 'validator_id' => 1, 'tanggal_validasi' => '2024-02-16', 'status_validasi' => 'Pending', 'catatan' => 'Sedang dalam review']
        ];

        foreach ($validasis as $validasi) {
            Validasi::create($validasi);
        }
    }
}