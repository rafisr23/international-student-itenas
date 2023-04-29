<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function scholarshipAchievementQuestions()
    {
        return $this->hasMany(ScholarshipAchievementQuestion::class);
    }
}