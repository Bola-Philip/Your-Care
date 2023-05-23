<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientResult extends Model
{
    use HasFactory;
    protected $table = 'patient_results';
    protected $primaryKey = 'id';

    protected $guarded = [
        'patient_id',
        'lab_name',
        'lab_phone',
        'result'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
