<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDiseaseMedia extends Model
{
    use HasFactory;
    protected $table = 'patientDiseaseMedia';
    protected $primaryKey = 'id';
    protected $fillable = [
        'disease_id',
        'media_path',
        'detection_date',
    ];

    public function disease()
    {
        return $this->belongsTo(PatientDisease::class, 'disease_id');
    }}
