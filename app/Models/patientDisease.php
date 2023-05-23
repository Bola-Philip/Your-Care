<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDisease extends Model
{
    use HasFactory;
    protected $table = 'patientDiseases';
    protected $primaryKey = 'id';

    protected $fillable = [
        'patient_id',
        'disease_title',
        'disease_description',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function diseaseMedia()
    {
        return $this->hasMany(PatientDisease::class, 'disease_id');
    }
}
