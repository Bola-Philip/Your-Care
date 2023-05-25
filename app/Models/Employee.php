<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table='employees';
    protected $primaryKey='id';

    protected $guarded = [];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function workTimes()
    {
        return $this->hasMany(WorkTime::class, 'doctor_id');
    }
}
