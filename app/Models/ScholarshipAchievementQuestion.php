<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipAchievementQuestion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

    public function scholarshipAchievementAnswers()
    {
        return $this->hasMany(ScholarshipAchievementAnswer::class);
    }
}