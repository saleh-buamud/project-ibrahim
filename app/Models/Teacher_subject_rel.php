<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher_subject_rel extends Model
{



public function teachers()
{
    return $this->hasMany(Teacher::class ,'id','teacher_id');
}


}
