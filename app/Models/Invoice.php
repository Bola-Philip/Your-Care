<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'id';

    protected $fillable = [
        'center_id',
        'client_id',
        'patient_id',
        'doctor_id',
        'payment_due',
        'title',
        'total_value',
        'discount',
        'tax',
        'message',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function invoicedServices()
    {
        return $this->hasMany(InvoicedService::class, 'invoice_id');
    }
}
