<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    protected $primaryKey ='id';

    protected $guarded = [
        'title'
    ];

    public function reports()
    {
        return $this->hasMany(Report::class, 'form_id');
    }
}
