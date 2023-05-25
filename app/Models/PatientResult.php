<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientResult extends Model
{
    use HasFactory;
    protected $table = 'patient_results';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
