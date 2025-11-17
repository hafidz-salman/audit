<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AuditTrail;

class AuditTrailSeeder extends Seeder
{
    public function run(): void
    {
        $trails = [
            ['user_id' => 1, 'aksi' => 'CREATE', 'tabel_terkait' => 'standar_mutu', 'record_id' => 1, 'deskripsi' => 'Membuat standar mutu baru: Standar Akademik', 'timestamp' => now()->subDays(5)],
            ['user_id' => 2, 'aksi' => 'UPDATE', 'tabel_terkait' => 'data_kinerja', 'record_id' => 1, 'deskripsi' => 'Mengupdate data kinerja periode 2024-1', 'timestamp' => now()->subDays(3)],
            ['user_id' => 1, 'aksi' => 'CREATE', 'tabel_terkait' => 'audit', 'record_id' => 1, 'deskripsi' => 'Membuat audit baru untuk periode 2024-1', 'timestamp' => now()->subDays(2)],
            ['user_id' => 3, 'aksi' => 'CREATE', 'tabel_terkait' => 'validasi', 'record_id' => 1, 'deskripsi' => 'Melakukan validasi data kinerja', 'timestamp' => now()->subDays(1)],
            ['user_id' => 2, 'aksi' => 'UPDATE', 'tabel_terkait' => 'tindak_lanjut', 'record_id' => 3, 'deskripsi' => 'Mengupdate status tindak lanjut menjadi Selesai', 'timestamp' => now()]
        ];

        foreach ($trails as $trail) {
            AuditTrail::create($trail);
        }
    }
}