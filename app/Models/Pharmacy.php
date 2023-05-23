<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Pharmacy extends Authenticatable implements JWTSubject
{
    protected $table = 'pharmacies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'center_id',
        'name',
        'username',
        'password',
        'email',
        'work_email',
        'phone',
        'work_phone',
        'website',
        'address',
        'country',
        'state',
        'province',
        'zipCod',
        'facebook',
        'instagram',
        'twitter',
        'snapchat',
        'youtube',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function pharmacyProducts()
    {
        return $this->hasMany(PharmacyProduct::class, 'pharmacy_id');
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
