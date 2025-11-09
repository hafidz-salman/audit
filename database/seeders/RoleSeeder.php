<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['role_name' => 'Admin', 'description' => 'Administrator sistem'],
            ['role_name' => 'Auditor', 'description' => 'Melakukan audit kinerja'],
            ['role_name' => 'Validator', 'description' => 'Memvalidasi data kinerja'],
            ['role_name' => 'Staff', 'description' => 'Staff unit kerja'],
            ['role_name' => 'Pimpinan', 'description' => 'Pimpinan unit kerja']
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}