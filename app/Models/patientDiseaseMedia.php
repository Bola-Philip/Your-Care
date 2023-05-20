<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientDiseaseMedia extends Model
{
    use HasFactory;
    public function patientDisease()
    {
        return $this->belongsTo(patientDisease::class, 'disease_id');
    }
}
