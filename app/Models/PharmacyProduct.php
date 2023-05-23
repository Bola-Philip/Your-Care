<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyProduct extends Model
{
    protected $table = 'pharmacy_products';
    protected $primaryKey = 'id';

    protected $guarded = [
        'pharmacy_id',
        'name',
        'description',
        'details',
        'price',
        'amount',
    ];

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id');
    }

    public function pharmacyProductImages()
    {
        return $this->hasMany(PharmacyProductImage::class, 'pharmacy_product_id');
    }
}
