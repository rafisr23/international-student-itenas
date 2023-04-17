<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\ScholarshipSeeder;
use Database\Seeders\TuitionFeeOddSeeder;
use Database\Seeders\TuitionFeeEvenSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,
            // FacultySeeder::class,
            // StudyProgramSeeder::class,
            // TuitionFeeOddSeeder::class,
            // TuitionFeeEvenSeeder::class,
            // ScholarshipSeeder::class,
            RoleSeeder::class,
        ]);
    }
}