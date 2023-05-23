<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $primaryKey = 'id';

    protected $guarded = [
        'center_id',
        'insurance_company_id',
        'image',
        'name',
        'username',
        'birth_date',
        'ssn',
        'phone',
        'email',
        'password',
        'address',
        'length',
        'weight',
        'bloodType',
        'gender',
        'nationality',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function insuranceCompany()
    {
        return $this->belongsTo(InsuranceCompany::class, 'insurance_company_id');
    }

    public function patientDiseases()
    {
        return $this->hasMany(PatientDisease::class, 'patient_id');
    }

    public function patientResults()
    {
        return $this->hasMany(PatientResult::class, 'patient_id');
    }

    public function samples()
    {
        return $this->hasMany(Sample::class, 'patient_id');
    }

    public function bookingRequests()
    {
        return $this->hasMany(BookingRequest::class, 'patient_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'patient_id');
    }
    // public function doctor(){
    //     return $this->belongsToMany(Doctor::class)->withPivot('bookingRequests');
    // }
}
