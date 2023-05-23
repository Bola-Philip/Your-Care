<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Authenticatable implements JWTSubject
{

    protected $table = 'admins';
    protected $primaryKey = 'id';

    protected $guarded = [
        'center_id',
        'username',
        'name',
        'phone',
        'email',
        'password',
        'permission',
    ];

    public $timestamps = true;

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
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
