<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@audit.com',
                'password_hash' => Hash::make('password'),
                'role_id' => 1,
                'unit_id' => null
            ],
            [
                'name' => 'Auditor Utama',
                'email' => 'auditor@audit.com',
                'password_hash' => Hash::make('password'),
                'role_id' => 2,
                'unit_id' => null
            ],
            [
                'name' => 'Validator Akademik',
                'email' => 'validator@audit.com',
                'password_hash' => Hash::make('password'),
                'role_id' => 3,
                'unit_id' => 3
            ],
            [
                'name' => 'Staff Teknik',
                'email' => 'staff.teknik@audit.com',
                'password_hash' => Hash::make('password'),
                'role_id' => 4,
                'unit_id' => 1
            ],
            [
                'name' => 'Dekan Ekonomi',
                'email' => 'dekan.ekonomi@audit.com',
                'password_hash' => Hash::make('password'),
                'role_id' => 5,
                'unit_id' => 2
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}