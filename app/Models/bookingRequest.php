<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory;

    protected $table = 'bookingRequests';

    protected $fillable = [
        'center_id',
        'patient_id',
        'doctor_id',
        'title',
        'service_description',
        'start_at',
        'finish_at',
        'rating',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id','id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function patientTakeServices()
    {
        return $this->hasMany(PatientTakeService::class, 'booking_id');
    }
}
