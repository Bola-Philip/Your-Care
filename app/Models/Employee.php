<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function Center()
    {
        return $this->belongsTo(Center::class, 'centerId');
    }
    public function workTime()
    {
        return $this->hasMany(workTime::class, 'employeeId');
    }
}
