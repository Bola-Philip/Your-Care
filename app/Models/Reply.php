<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    protected $table = 'replies';
    public function Samples()
    {
        return $this->hasMany(Sample::class, 'replyId');
    }
}
