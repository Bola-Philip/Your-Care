<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientDisease extends Model
{
    use HasFactory;
    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patientId',);
    }
    public function patientDiseaseMedia()
    {
        return $this->hasMany(patientDiseaseMedia::class, 'diseaseId');
    }
}
