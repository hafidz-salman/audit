<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataKinerja;

class DataKinerjaSeeder extends Seeder
{
    public function run(): void
    {
        $dataKinerjas = [
            ['indikator_id' => 1, 'kriteria_id' => 1, 'user_id' => 1, 'periode' => '2024-1', 'capaian' => 85.50, 'status' => 'Tercapai'],
            ['indikator_id' => 2, 'kriteria_id' => 2, 'user_id' => 2, 'periode' => '2024-1', 'capaian' => 78.25, 'status' => 'Tercapai'],
            ['indikator_id' => 3, 'kriteria_id' => 3, 'user_id' => 1, 'periode' => '2024-1', 'capaian' => 65.00, 'status' => 'Belum Tercapai'],
            ['indikator_id' => 1, 'kriteria_id' => 4, 'user_id' => 3, 'periode' => '2024-2', 'capaian' => 92.75, 'status' => 'Tercapai'],
            ['indikator_id' => 2, 'kriteria_id' => 5, 'user_id' => 2, 'periode' => '2024-2', 'capaian' => 88.00, 'status' => 'Tercapai']
        ];

        foreach ($dataKinerjas as $data) {
            DataKinerja::create($data);
        }
    }
}