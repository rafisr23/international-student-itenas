<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculty = 
        [
            [
                'name' => 'Faculty of Industrial Engineering',
                'slug' => 'fie',
            ],
            [
                'name' => 'Faculty of Civil Engineering and Planning',
                'slug' => 'fcep',
            ],
            [
                'name' => 'Faculty Architecture and Design',
                'slug' => 'fad',
            ]
        ];
        
        foreach ($faculty as $key => $value) {
            Faculty::create($value);
        }
    }
}