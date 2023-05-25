<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyProduct extends Model
{
    protected $table = 'pharmacy_products';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id');
    }

    public function pharmacyProductImages()
    {
        return $this->hasMany(PharmacyProductImage::class, 'pharmacy_product_id');
    }
}
