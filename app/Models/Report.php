<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    public function Patient()
    {
        return $this->hasMany(Patient::class, 'patientId');
    }
    public function Doctor()
    {
        return $this->hasMany(Doctor::class, 'doctorId');
    }
    public function ()
    {
        return $this->hasMany(doctorExperience::class, 'doctorId');
    }
}
