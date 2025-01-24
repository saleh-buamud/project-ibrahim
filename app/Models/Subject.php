<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function teachers()        //لتعريف ان المدرس يأخذ اكثر من مادة بعلاقة عكسية
    {
        return $this->belongsToMany(
            Teacher::class,          // موديل المدرس
            'teacher_subject_rels',  // اسم الجدول الوسيط
            'subject_code',          // المفتاح الأجنبي للمادة
            'teacher_id',            // المفتاح الأجنبي للمدرس
            'code',                  // المفتاح الأساسي للمادة
            'id'                     // المفتاح الأساسي للمدرس
        );
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'code');
    }

    public function Student()
    {
    return $this->belongsTo(Student::class);
    }

    public function studentRelations()
    {
        return $this->hasMany(Subject_student_rel::class, 'subject_code', 'code');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'subject_student_rels', 'subject_code', 'student_id')
                    ->withPivot('shares', 'exams','all','Commitment');
    }

    public function academicYear()
    {
    return $this->belongsTo(acadmics_year::class, 'acadmic_year_id');
    }

}
