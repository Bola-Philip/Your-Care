<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Lab extends  Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = 'labs';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function samples()
    {
        return $this->hasMany(Sample::class, 'lab_id');
    }
    public function replies()
    {
        return $this->hasManyThrough(Replies::class, Sample::class, 'lab_id', 'id', 'id', 'reply_id');
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
