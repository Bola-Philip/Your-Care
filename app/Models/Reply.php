<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    protected $table = 'replies';

    protected $fillable =[
        'sample_id',
        'result'
    ];
    public function sample()
    {
        return $this->belongsTo(Sample::class, 'reply_id', 'sample_id');
    }
}
