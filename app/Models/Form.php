<?php

namespace App\Models;

use App\Models\User;
use App\Models\Student;
use App\Models\Scholarship;
use App\Models\StudyProgram;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function scholarship() {
        return $this->belongsTo(Scholarship::class);
    }

    public function studyProgram() {
        return $this->belongsTo(StudyProgram::class);
    }
}