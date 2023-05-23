<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $primaryKey = ['doctor_id', 'patient_id', 'created_at'];

    protected $guarded = [
        'center_id',
        'doctor_id',
        'patient_id',
        'form_id',
        'created_at',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id');
    }
}
