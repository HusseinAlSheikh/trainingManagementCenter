<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyLevel extends Model
{
    use HasFactory;


    function studyLevelCategory(){
        return $this->belongsTo(StudyLevelCategory::class);
    }

}
