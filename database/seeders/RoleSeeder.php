<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                'name' => 'User',
                'slug' => 'user',
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'Biro Akademik',
                'slug' => 'biro-akademik',
            ]
        ];

        foreach ($role as $key => $value) {
            \App\Models\Role::create($value);
        }
    }
}