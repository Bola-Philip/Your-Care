<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorExperience extends Model
{
    use HasFactory;
    protected $table = 'doctorexperiences';
    protected $guarded = [];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
