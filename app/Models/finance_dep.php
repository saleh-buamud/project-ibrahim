<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finance_dep extends Model
{
    protected $table = 'finance_deps';
    protected $primaryKey = ['student_id', 'acadmic_year_id'];
    public $incrementing = false; // لأن المفتاح الأساسي المركب لا يُستخدم مع auto_increment

    protected $fillable = [
        'paid_value',
        'remaining_fees'
    ];

    protected static function booted()
    {
        static::creating(function ($financeDep) {
            $financeDep->total_price = $financeDep->academicYear->total_price;
        });
    }

    public function academicYear()
    {
        return $this->belongsTo(acadmics_year::class, 'acadmic_year_id');
    }
}
