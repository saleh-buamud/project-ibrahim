<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class Teacher extends Model
{
   use HasFactory; //

public function role()
{
    return $this->belongsTo(Role::class);
}

public function subject()
{
    return $this->belongsTo(Subject::class, 'subject_code', 'code');
}

public function subject2()
{
    return $this->hasMany(Subject::class, 'subject_code', 'code');
}

public function subjects()    //لتعريف أن المدرس يأخذ اكثر من مادة للتدريس
{
    return $this->belongsToMany(
        Subject::class,          // موديل المادة
        'teacher_subject_rels',  // اسم الجدول الوسيط
        'teacher_id',            // المفتاح الأجنبي للمدرس
        'subject_code',          // المفتاح الأجنبي للمادة
        'id',                    // المفتاح الأساسي للمدرس
        'code'                   // المفتاح الأساسي للمادة
    )->withPivot('id');
}

public function students()
{
    return $this->hasManyThrough(Student::class, Subject_Student_rel::class, 'subject_code', 'id', 'id', 'student_id');
}

}
