<?php

namespace Database\Seeders;

use App\Models\TuitionFeeEven;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TuitionFeeEvenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tuitionFeeEven = [
            [
                'study_program_id' => 1,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 250000,
                'tuition_fee' => 11450000,
            ],
            [
                'study_program_id' => 2,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7600000,
                'practical_studio_fee' => 0,
                'tuition_fee' => 11600000,
            ],
            [
                'study_program_id' => 3,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 0,
                'tuition_fee' => 11200000,
            ],
            [
                'study_program_id' => 4,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 840000,
                'tuition_fee' => 12040000,
            ],
            [
                'study_program_id' => 5,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 0,
                'tuition_fee' => 11200000,
            ],
            [
                'study_program_id' => 6,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 0,
                'tuition_fee' => 11200000,
            ],
            [
                'study_program_id' => 7,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 265000,
                'tuition_fee' => 12265000,
            ],
            [
                'study_program_id' => 8,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7600000,
                'practical_studio_fee' => 130000,
                'tuition_fee' => 11730000,
            ],
            [
                'study_program_id' => 9,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 295000,
                'tuition_fee' => 11495000,
            ],
            [
                'study_program_id' => 10,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 725000,
                'tuition_fee' => 12725000,
            ],
            [
                'study_program_id' => 11,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 420000,
                'tuition_fee' => 12420000,
            ],
            [
                'study_program_id' => 12,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 9000000,
                'practical_studio_fee' => 600000,
                'tuition_fee' => 13600000,
            ],
            [
                'study_program_id' => 13,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 9000000,
                'practical_studio_fee' => 720000,
                'tuition_fee' => 13720000,
            ], 
            [
                'study_program_id' => 14,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 9000000,
                'practical_studio_fee' => 400000,
                'tuition_fee' => 13400000,
            ]
        ];

        foreach ($tuitionFeeEven as $fee) {
            TuitionFeeEven::create($fee);
        }
    }
}