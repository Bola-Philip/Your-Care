<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    protected $primaryKey = 'id';

    protected $guarded = [];
    public function sample()
    {
        return $this->hasOne(Sample::class, 'reply_id');
    }
    public function lab()
    {
        return $this->sample()->lab();
    }
}
