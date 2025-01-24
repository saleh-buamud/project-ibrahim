<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class acadmics_year extends Model
{
    public function student()
{
    return $this->belongsTo(Student::class,'id');
}

}
