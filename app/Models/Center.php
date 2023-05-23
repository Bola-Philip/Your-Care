<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'centers';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo_path',
        'name',
        'username',
        'email',
        'password',
        'country',
        'subscriptionType',
        'subscriptionPeriod',
        'formalEmail',
        'phone',
        'formalPhone',
        'website',
        'address1',
        'address2',
        'state',
        'province',
        'zipCod',
        'facebook',
        'instagram',
        'twitter',
        'snapchat',
        'youtube',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the admins for the center.
     */
    public function admins()
    {
        return $this->hasMany(Admin::class, 'center_id');
    }
    public function departments()
    {
        return $this->hasMany(Department::class, 'center_id');
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
