<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function patientDisease()
    {
        return $this->hasMany(patientDisease::class, 'patientId');
    }
    public function Sample()
    {
        return $this->hasMany(Sample::class, 'patientId');
    }
    public function patientTakeService()
    {
        return $this->hasMany(patientTakeService::class, 'patientId');
    }
}
