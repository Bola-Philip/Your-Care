<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientService extends Model
{
    protected $table = 'client_services';
    protected $primaryKey = 'id';

    protected $fillable = [
        'client_id',
        'title',
        'description',
        'cost',
        'notes',
        'paid',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
