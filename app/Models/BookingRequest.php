<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory;

    protected $table = 'booking_requests';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id', 'id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function services()
    {
        return $this->hasManyThrough(CenterService::class, patientTakeServices::class, 'booking_id', 'id', 'id', 'service_id');
    }
    // public function patient()
    // {
    //     return $this->belongsTo(Patient::class, 'patient_id', 'id');
    // }

    // public function doctor()
    // {
    //     return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    // }

    public function patientTakeServices()
    {
        return $this->hasMany(PatientTakeService::class, 'booking_id');
    }
}
