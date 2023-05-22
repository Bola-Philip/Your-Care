<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = [];
    protected $table = 'reports';
    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patientId');
    }
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
    }
    public function Form()
    {
        return $this->hasOne(doctorExperience::class, 'formId');
    }
}
