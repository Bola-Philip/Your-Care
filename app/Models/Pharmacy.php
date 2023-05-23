<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Pharmacy extends Model
{
    protected $table = 'pharmacies';
    protected $primaryKey = 'id';

    protected $guarded = [
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
}
