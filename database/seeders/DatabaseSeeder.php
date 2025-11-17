<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UnitSeeder::class,
            UserSeeder::class,
            StandarMutuSeeder::class,
            IndikatorKinerjaSeeder::class,
            KriteriaSeeder::class,
            DataKinerjaSeeder::class,
            ValidasiSeeder::class,
            AuditSeeder::class,
            AuditTemuanSeeder::class,
            TindakLanjutSeeder::class,
            LaporanSeeder::class,
            AuditTrailSeeder::class,
        ]);
    }
}
