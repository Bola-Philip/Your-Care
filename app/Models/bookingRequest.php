<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingRequest extends Model
{
    protected $guarded = [];
    protected $table = 'bookingRequests';

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patientId');
    }
}
