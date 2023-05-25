<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'samples';
    protected $primaryKey = 'id';

    protected $guarded = [];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab-id');
    }
    public function reply()
    {
        return $this->hasOne(Reply::class, 'sample_id', 'reply_id');
    }
}
