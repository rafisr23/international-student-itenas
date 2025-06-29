<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function form() {
        return $this->hasOne(Form::class);
    }

    public function scholarshipAchievementAnswers() {
        return $this->hasMany(ScholarshipAchievementAnswer::class);
    }

    public function scholarshipAchievementLists() {
        return $this->hasMany(ScholarshipAchievementList::class);
    }
}