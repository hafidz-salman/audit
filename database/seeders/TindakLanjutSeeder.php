<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TindakLanjut;

class TindakLanjutSeeder extends Seeder
{
    public function run(): void
    {
        $tindakLanjuts = [
            ['temuan_id' => 1, 'rencana_tindakan' => 'Melengkapi dokumentasi proses pembelajaran sesuai standar', 'target_selesai' => '2024-03-15', 'status_tindakan' => 'Berlangsung', 'penanggung_jawab' => 2],
            ['temuan_id' => 2, 'rencana_tindakan' => 'Pengadaan peralatan laboratorium baru', 'target_selesai' => '2024-06-30', 'status_tindakan' => 'Direncanakan', 'penanggung_jawab' => 1],
            ['temuan_id' => 3, 'rencana_tindakan' => 'Implementasi sistem reminder otomatis untuk pelaporan', 'target_selesai' => '2024-02-28', 'status_tindakan' => 'Selesai', 'penanggung_jawab' => 3],
            ['temuan_id' => 4, 'rencana_tindakan' => 'Upgrade sistem informasi akademik', 'target_selesai' => '2024-12-31', 'status_tindakan' => 'Direncanakan', 'penanggung_jawab' => 1]
        ];

        foreach ($tindakLanjuts as $tindak) {
            TindakLanjut::create($tindak);
        }
    }
}