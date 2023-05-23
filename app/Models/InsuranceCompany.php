<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    protected $table = 'insurance_companies';
    protected $primaryKey = 'id';

    protected $guarded = [
        'center_id',
        'logo_path',
        'name',
        'description',
        'email',
        'formal_email',
        'phone',
        'formal_phone',
        'website',
        'country',
        'address',
        'state',
        'province',
        'zip_code',
        'facebook',
        'instagram',
        'twitter',
        'snapchat',
        'youtube',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function patients()
    {
        return $this->hasMany(Patient::class, 'insurance_company_id');
    }
}
