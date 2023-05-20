<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'centers';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'logo_path',
        'password',
        'email',
        'formalEmail',
        'phone',
        'formalPhone',
        'website',
        'address1',
        'address2',
        'country',
        'state',
        'province',
        'zipCod',
        'subscriptionType',
        'subscriptionPeriod',
        'facebook',
        'instagram',
        'twitter',
        'snapcaht',
        'youtube',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the admins for the center.
     */
    public function admins()
    {
        return $this->hasMany(Admin::class, 'centerId');
    }

    /**
     * Get the clients for the center.
     */
    public function clients()
    {
        return $this->hasMany(Client::class, 'centerId');
    }
}
