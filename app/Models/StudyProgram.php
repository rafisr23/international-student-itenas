<?php

namespace App\Models;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudyProgram extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
    
    public function form()
    {
        return $this->belongsTo(Form::class);
    }
    
    public function tuitionFeeOdds()
    {
        return $this->hasMany(TuitionFeeOdd::class);
    }

    public function tuitionFeeEvens()
    {
        return $this->hasMany(TuitionFeeEven::class);
    }

}