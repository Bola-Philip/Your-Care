<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'phone',
        'phone_description',
        'email',
        'company_address',
        'city',
        'country',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }
}
