<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::create([
            [
                'name' => 'Faculty of Industrial Engineering',
                'slug' => 'fie',
            ],
            [
                'name' => 'Faculty of Civil Engineering and Planning',
                'slug' => 'fcep',
            ],
            [
                'name' => 'Faculty of Architecture and Design',
                'slug' => 'fad',
            ]
        ]);
    }
}