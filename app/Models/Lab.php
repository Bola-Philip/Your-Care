<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Lab extends Model
{
    use HasFactory;
    protected $table = 'labs';
    protected $primaryKey = 'id';

    protected $guarded = [
        'center_id',
        'image',
        'name',
        'user_name',
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
}
