<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studyprogram = 
        [
            [
                'name' => 'Electrical Engineering',
                'code' => '11',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Mechanical Engineering',
                'code' => '12',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Industrial Engineering',
                'code' => '13',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Chemical Engineering',
                'code' => '14',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Informatics',
                'code' => '15',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Information System',
                'code' => '16',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Civil Engineering',
                'code' => '22',
                'faculty_id' => 2,
            ],
            [
                'name' => 'Geodatic Engineering',
                'code' => '23',
                'faculty_id' => 2,
            ],
            [
                'name' => 'Urban and Regional Planning',
                'code' => '24',
                'faculty_id' => 2,
            ],
            [
                'name' => 'Environmental Engineering',
                'code' => '25',
                'faculty_id' => 2,
            ],
            [
                'name' => 'Interior Design',
                'code' => '31',
                'faculty_id' => 3,
            ],
            [
                'name' => 'Product Design',
                'code' => '32',
                'faculty_id' => 3,
            ],
            [
                'name' => 'Communication and Visual Design',
                'code' => '33',
                'faculty_id' => 3,
            ],
            [
                'name' => 'Architecture',
                'code' => '21',
                'faculty_id' => 3,
            ]
        ];

        foreach ($studyprogram as $key => $value) {
            StudyProgram::create($value);
        }
    }
}