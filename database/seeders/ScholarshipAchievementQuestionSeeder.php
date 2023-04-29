<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipAchievementQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $question = [
            [
                'question' => 'Tell us something you have done outside your school curriculum to prepare yourself for your chosen degree course(s). For example, did you work in a relevant part-time job, or did you take an online course?',
                'max_answer' => 550,
                'scholarship_id' => 2,
            ],
            [
                'question' => 'Tell us about a time when you falled to do something on your first try, but succeeded on subsequent attempts. How did you learn from your Initial failure, change your approach, so that you eventually succeeded?',
                'max_answer' => 550,
                'scholarship_id' => 2,
            ],
            [
                'question' => 'Tell us about something that is meaningful to you, and why?',
                'max_answer' => 550,
                'scholarship_id' => 2,
            ],
            [
                'question' => 'What is your proudest achievement?',
                'max_answer' => 550,
                'scholarship_id' => 2,
            ],
            [
                'question' => 'Is there anything else about yourself which you want us to know?',
                'max_answer' => 550,
                'scholarship_id' => 2,
            ],
        ];

        foreach ($question as $key => $value) {
            \App\Models\ScholarshipAchievementQuestion::create($value);
        }
    }
}