<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $primaryKey='id';
    protected $fillable = [
        'center_id',
        'department_id',
        'image',
        'username',
        'name',
        'ssn',
        'phone',
        'work_phone',
        'email',
        'password',
        'work_email',
        'job_description',
        'abstract',
        'full_brief',
        'job_id',
        'birth_date',
        'experience_years',
        'address',
        'salary',
        'gender',
        'nationality',
    ];
    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function doctorExperiences()
    {
        return $this->hasMany(DoctorExperience::class, 'doctor_id');
    }
    public function workTimes()
    {
        return $this->hasMany(WorkTime::class, 'doctor_id');
    }
    public function bookingRequests()
    {
        return $this->hasMany(BookingRequest::class, 'doctor_id');
    }
    public function samples()
    {
        return $this->hasMany(Sample::class, 'doctor_id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'doctor_id');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'doctor_id');
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    // public function patient(){
    //     return $this->belongsToMany(Patient::class)->withPivot('bookingRequests');
    // }
}
