<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function programs()
    {
        return $this->hasMany(StudyProgram::class);
    }
}