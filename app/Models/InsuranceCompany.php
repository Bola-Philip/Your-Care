<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    protected $table = 'insurance_companies';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function patients()
    {
        return $this->hasMany(Patient::class, 'insurance_company_id');
    }
}
