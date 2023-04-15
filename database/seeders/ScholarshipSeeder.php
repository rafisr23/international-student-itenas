<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scholarship = [
            [
                'name' => 'Regular',
                'slug' => 'regular',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl aliquam mauris, eget',
                'image' => 'scholarship-1.jpg',
                'link' => 'https://www.google.com',
            ],
            [
                'name' => 'Cahaya Scholarship',
                'slug' => 'cahaya-scholarship',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl aliquam mauris, eget',
                'image' => 'scholarship-1.jpg',
                'link' => 'https://www.google.com',
            ],
            [
                'name' => 'Darmasiswa Scholarship',
                'slug' => 'darmasiswa-scholarship',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl aliquam mauris, eget',
                'image' => 'scholarship-1.jpg',
                'link' => 'https://www.google.com',
            ]
        ];

        foreach ($scholarship as $scholarship) {
            \App\Models\Scholarship::create($scholarship);
        }
    }
}