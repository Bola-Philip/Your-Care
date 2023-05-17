<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function Sample()
    {
        return $this->hasMany(Sample::class, 'doctorId');
    }
    public function workTime()
    {
        return $this->hasMany(workTime::class , 'doctorId');
    }
    public function patientTakeService()
    {
        return $this->hasMany(patientTakeService::class, 'doctorId');
    }
    public function doctorExperience()
    {
        return $this->hasMany(doctorExperience::class, 'doctorId');
    }
    public function Report()
    {
        return $this->hasMany(Report::class, 'doctorId');
    }
    public function bookingRequest()
    {
        return $this->hasMany(bookingRequest::class, 'doctorId');
    }
    public function Department()
    {
        return $this->belongsTo(Department::class, 'departmentId');
    }

}
