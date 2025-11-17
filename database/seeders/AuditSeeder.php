<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Audit;

class AuditSeeder extends Seeder
{
    public function run(): void
    {
        $audits = [
            ['validasi_id' => 1, 'auditor_id' => 1, 'tanggal_audit' => '2024-01-20', 'status_audit' => 'Selesai', 'skor_total' => 85.50, 'periode' => '2024-1'],
            ['validasi_id' => 2, 'auditor_id' => 2, 'tanggal_audit' => '2024-01-21', 'status_audit' => 'Selesai', 'skor_total' => 78.25, 'periode' => '2024-1'],
            ['validasi_id' => 4, 'auditor_id' => 1, 'tanggal_audit' => '2024-02-20', 'status_audit' => 'Berlangsung', 'skor_total' => null, 'periode' => '2024-2'],
            ['validasi_id' => 5, 'auditor_id' => 3, 'tanggal_audit' => '2024-02-21', 'status_audit' => 'Direncanakan', 'skor_total' => null, 'periode' => '2024-2']
        ];

        foreach ($audits as $audit) {
            Audit::create($audit);
        }
    }
}