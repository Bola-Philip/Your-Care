<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    protected $table = 'work_times';
    protected $primaryKey = [
        'id',
        'doctor_id',
        'employee_id'
    ];
    protected $guarded = [
        'doctor_id',
        'employee_id',
        'type',
        'start_at',
        'end_at',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
