<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject_student_rel extends Model
{
    protected $table = 'subject_student_rels';


    protected $fillable = [
        'student_id',
        'subject_code',
        'grade',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }


    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_code', 'code');
    }



}
