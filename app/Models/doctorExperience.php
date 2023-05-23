<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorExperience extends Model
{
    use HasFactory;
    protected $table = 'doctor_experience';
    protected $primaryKey = 'id';

    protected $guarded = [
        'doctor_id',
        'experience_name',
        'work_place_name',
        'work_place_country',
        'started_at',
        'finished_at',
        'still_works',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
