<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipAchievementAnswer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scholarshipAchievementQuestion()
    {
        return $this->belongsTo(ScholarshipAchievementQuestion::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}