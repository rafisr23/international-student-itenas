<?php

namespace Database\Seeders;

use App\Models\TuitionFeeOdd;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TuitionFeeOddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tuitionFeeOdd = [
            [
                'study_program_id' => 1,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 250000,
                'tuition_fee' => 11450000,
                'educational_development_fee' => 25000000,
                'total_fee' => 36450000,
            ],
            [
                'study_program_id' => 2,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 0,
                'tuition_fee' => 12000000,
                'educational_development_fee' => 25000000,
                'total_fee' => 37000000,
            ],
            [
                'study_program_id' => 3,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7600000,
                'practical_studio_fee' => 195000,
                'tuition_fee' => 11795000,
                'educational_development_fee' => 25000000,
                'total_fee' => 36795000,
            ],
            [
                'study_program_id' => 4,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 840000,
                'tuition_fee' => 12040000,
                'educational_development_fee' => 25000000,
                'total_fee' => 37040000,
            ],
            [
                'study_program_id' => 5,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 0,
                'tuition_fee' => 11200000,
                'educational_development_fee' => 25000000,
                'total_fee' => 36200000,
            ],
            [
                'study_program_id' => 6,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 7200000,
                'practical_studio_fee' => 0,
                'tuition_fee' => 11200000,
                'educational_development_fee' => 25000000,
                'total_fee' => 36200000,
            ],
            [
                'study_program_id' => 7,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 270000,
                'tuition_fee' => 12270000,
                'educational_development_fee' => 25000000,
                'total_fee' => 37270000,
            ],
            [
                'study_program_id' => 8,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 130000,
                'tuition_fee' => 12130000,
                'educational_development_fee' => 25000000,
                'total_fee' => 37130000,
            ],
            [
                'study_program_id' => 9,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 190000,
                'tuition_fee' => 12190000,
                'educational_development_fee' => 25000000,
                'total_fee' => 37190000,
            ],
            [
                'study_program_id' => 10,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 8000000,
                'practical_studio_fee' => 1020000,
                'tuition_fee' => 13020000,
                'educational_development_fee' => 25000000,
                'total_fee' => 38020000,
            ],
            [
                'study_program_id' => 11,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 10000000,
                'practical_studio_fee' => 520000,
                'tuition_fee' => 14520000,
                'educational_development_fee' => 25000000,
                'total_fee' => 39520000,
            ],
            [
                'study_program_id' => 12,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 10000000,
                'practical_studio_fee' => 480000,
                'tuition_fee' => 14480000,
                'educational_development_fee' => 25000000,
                'total_fee' => 39480000,
            ],
            [
                'study_program_id' => 13,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 9000000,
                'practical_studio_fee' => 720000,
                'tuition_fee' => 13720000,
                'educational_development_fee' => 25000000,
                'total_fee' => 38720000,
            ], 
            [
                'study_program_id' => 14,
                'fixed_course_fee' => 4000000,
                'variable_course_fee' => 9500000,
                'practical_studio_fee' => 400000,
                'tuition_fee' => 13900000,
                'educational_development_fee' => 25000000,
                'total_fee' => 38900000,
            ]
        ];

        foreach ($tuitionFeeOdd as $tuitionFee) {
            TuitionFeeOdd::create($tuitionFee);
        }
    }
}