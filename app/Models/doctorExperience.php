<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorExperience extends Model
{
    protected $guarded = [];
    protected $table = 'doctorExperiences';
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
    }
}
