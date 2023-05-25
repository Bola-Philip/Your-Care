<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDiseaseMedia extends Model
{
    use HasFactory;
    protected $table = 'patient_disease_media';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function disease()
    {
        return $this->belongsTo(PatientDisease::class, 'disease_id');
    }}
