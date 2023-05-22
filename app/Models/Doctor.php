<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Doctor extends Authenticatable implements JWTSubject
{
    protected $guarded = [];
    protected $table = 'doctors';
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
    public function patient(){
        return $this->belongsToMany(Patient::class)->withPivot('bookingRequests');
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
