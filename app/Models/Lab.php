<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Lab extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = 'labs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'center_id',
        'image',
        'name',
        'username',
        'password',
        'phone',
        'email',
        'website',
        'address',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function samples()
    {
        return $this->hasMany(Sample::class, 'lab_id');
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
