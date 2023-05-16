<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    public function ()
    {
        return $this->hasMany(doctorExperience::class, 'doctorId');
    }
    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patientId');
    }
    public function Lab()
    {
        return $this->belongsTo(Lab::class, 'labId');
    }
    public function Reply()
    {
        return $this->belongsTo(Reply::class, 'replyId');
    }
}
