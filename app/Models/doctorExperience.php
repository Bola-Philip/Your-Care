<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorExperience extends Model
{
    use HasFactory;
    protected $table = 'doctorExperience';
    protected $primaryKey = 'id';
    protected $fillable = [
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
