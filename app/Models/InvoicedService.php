<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoicedService extends Model
{
    protected $primaryKey = [
        'id', 'center_id',
        'client_id',
        'patient_id',
        'doctor_id',
    ];

    protected $fillable = [
        'invoice_id',
        'client_service_id',
        'center_service_id',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function clientService()
    {
        return $this->belongsTo(ClientService::class, 'client_service_id');
    }

    public function centerService()
    {
        return $this->belongsTo(CenterService::class, 'center_service_id');
    }
}
