<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $guarded = [];
    protected $table = 'samples';
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
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
