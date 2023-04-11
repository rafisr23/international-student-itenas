<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuitionFeeOdd extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
}