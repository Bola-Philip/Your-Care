<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = 'admins';

    protected $primaryKey = 'id';
    protected $fillable = [
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
}
