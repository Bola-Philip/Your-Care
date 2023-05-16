<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientTakeService extends Model
{
    use HasFactory;
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
    }
    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patientId');
    }
    public function centerService()
    {
        return $this->hasMany(doctorExperience::class, 'serviceId');
    }
}
