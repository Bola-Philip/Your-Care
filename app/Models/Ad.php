<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $table = 'ads';
    protected $guarded = [];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

}
