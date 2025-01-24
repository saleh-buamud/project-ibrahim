<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function role()
{
    return $this->belongsTo(Role::class);
}

public function subject()
{
    return $this->belongsTo(Subject::class);
}

public function acadmics_year()
{
    return $this->belongsTo(acadmics_year::class,'id');
}

public function subjectRelations()
{
    return $this->hasMany(Subject_student_rel::class, 'student_id');
}
public function subjects()
{
    return $this->belongsToMany(Subject::class, 'subject_student_rels', 'student_id', 'subject_code')
    ->withPivot('exams','share','all','Commitment'); // الوصول إلى الدرجة من الجدول الوسيط
}


    public function finance($acadmic_year_id)
    {
        return $this->hasOne(finance_Dep::class, 'student_id', 'id')
                    ->where('acadmic_year_id', $acadmic_year_id);
    }
}


