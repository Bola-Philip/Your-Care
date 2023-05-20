<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{    protected $primaryKey = 'id';

    protected $fillable = ['image_path', 'center_id', 'name', 'description'];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'department_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id');
    }
}
