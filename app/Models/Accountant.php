<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
    public function role()
{
    return $this->belongsTo(Role::class);
}

protected $fillable = [
    'name',
    'image',
    'username',
    'birth_day',
    'phone',
    'national_id',
    'address',
    'password',
];

}
