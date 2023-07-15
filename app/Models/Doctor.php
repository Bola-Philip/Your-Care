<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Doctor extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = 'doctors';
    protected $primaryKey = 'id';

    protected $guarded = [];
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
    public function patients()
    {
        return $this->hasManyThrough(Patient::class, BookingRequest::class, 'doctor_id', 'id', 'id', 'patient_id');
    }
    public function bookingRequests()
    {
        return $this->hasMany(BookingRequest::class, 'doctor_id');
    }
    public function services()
    {
        $my_services = "";
        foreach ($this->bookingRequests() as $booking) {
            $my_services += $booking->services();
        }
        return $my_services();
        // return $this->join('booking_requests', 'booking_requests.doctor_id', '=', 'doctors.id')
        // ->join('c', 'a.id', '=', 'c.a_id')
        // ->where('b.id', $id)
        // ->select('b.*', 'a.*', 'c.*')
        // ->first();

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
    public function rates()
    {
        return $this->hasMany(Rate::class, 'doctor_id');
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'doctor_id');
    }
    public function ads()
    {
        return $this->hasMany(Ad::class, 'doctor_id');
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

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

}
