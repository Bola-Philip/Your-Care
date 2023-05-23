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
    public function services()
    {
        return $this->hasMany(ClientService::class, 'client_id');
    }
    public function expenses()
    {
        return $this->hasMany(expenses::class, 'client_id');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'client_id');
    }
}
