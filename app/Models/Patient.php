<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function insuranceCompany()
    {
        return $this->belongsTo(insuranceCompany::class, 'insuranceCompanyId');
    }
    public function Sample()
    {
        return $this->hasMany(Sample::class, 'patientId');
    }
    public function patientTakeService()
    {
        return $this->hasMany(patientTakeService::class, 'patientId');
    }
    public function patientDisease()
    {
        return $this->hasMany(patientDisease::class, 'patientId');
    }
    public function bookingRequest()
    {
        return $this->hasMany(bookingRequest::class, 'patientId');
    }
    public function patientResult()
    {
        return $this->hasMany(patientResult::class, 'patientId');
    }
}
