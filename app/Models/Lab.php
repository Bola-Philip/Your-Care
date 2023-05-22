<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $guarded = [];
    protected $table = 'labs';
    public function Sample()
    {
        return $this->hasMany(Sample::class, 'labId');
    }
}
