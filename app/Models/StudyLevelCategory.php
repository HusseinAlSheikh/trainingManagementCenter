<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyLevelCategory extends Model
{
    use HasFactory;

    function studyLevels(){
        return $this->hasMany(StudyLevel::class);
    }
}
