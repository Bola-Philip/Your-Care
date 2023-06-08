<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Center extends Model
{
    protected $table = 'centers';
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    public function admins()
    {
        return $this->hasMany(Admin::class, 'center_id');
    }
    public function departments()
    {
        return $this->hasMany(Department::class, 'center_id');
    }
    public function bookingRequests()
    {
        return $this->hasMany(BookingRequestR::class, 'center_id');
    }
    public function centerServices()
    {
        return $this->hasMany(centerServices::class, 'center_id');
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'center_id');
    }
    public function employees()
    {
        return $this->hasMany(Employee::class, 'center_id');
    }
    public function patients()
    {
        return $this->hasMany(Patient::class, 'center_id');
    }
    public function insuranceCompanies()
    {
        return $this->hasMany(InsuranceCompany::class, 'center_id');
    }
    public function clients()
    {
        return $this->hasMany(Client::class, 'center_id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'center_id');
    }
    public function expenses()
    {
        return $this->hasMany(Expense::class, 'center_id');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'center_id');
    }
    public function labs()
    {
        return $this->hasMany(Lab::class, 'center_id');
    }
    public function pharmacies()
    {
        return $this->hasMany(Pharmacy::class, 'center_id');
    }
}
