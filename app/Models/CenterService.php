<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterService extends Model
{
    protected $table = 'center_services';
    protected $primaryKey = 'id';

    protected $guarded = ['center_id', 'name', 'description', 'price'];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }
    public function bookingRequests()
    {
        return $this->hasManyThrough(BookingRequest::class, PatientTakeService::class, 'service_id', 'id', 'id', 'booking_id');
    }
    public function patients()
    {
        return $this->bookingRequests()->patient();
    }
    public function doctors()
    {
        return $this->bookingRequests()->doctor();
    }
    public function invoices()
    {
        return $this->hasMany(InvoicedService::class, 'center_service_id');
    }
    // public function patientServices()
    // {
    //     return $this->hasMany(PatientTakeService::class, 'service_id');
    // }
    // public function patient(){
    //     return $this->belongsToMany(Patient::class)->withPivot('patient_take_services');
    // }
}
