<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorExperience extends Model
{
    use HasFactory;
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
    }
}
