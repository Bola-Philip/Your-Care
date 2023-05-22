<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $guarded = [];
    protected $table = 'forms';
    public function Report()
    {
        return $this->belongsTo(Report::class, 'formId');
    }
}
