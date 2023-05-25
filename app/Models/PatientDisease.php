<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDisease extends Model
{
    use HasFactory;
    protected $table = 'patient_diseases';
    protected $primaryKey = 'id';

    protected $guarded = [
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
