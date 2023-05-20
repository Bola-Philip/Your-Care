<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientTakeService extends Model
{
    protected $table = 'patient_take_services';

    public $timestamps = false;

    protected $primaryKey = [
        'id',
        'booking_id',
        'service_id',

    ];

    protected $fillable = [
        'booking_id',
        'service_id',
        'cost',
    ];

    public function bookingRequest()
    {
        return $this->belongsTo(BookingRequest::class, 'booking_id', 'id');
    }

    public function centerService()
    {
        return $this->belongsTo(CenterService::class, 'service_id', 'id');
    }
}
