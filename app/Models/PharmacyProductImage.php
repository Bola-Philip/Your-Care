<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyProductImage extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'pharmacy_product_id',
        'image_path',
    ];

    public function pharmacyProduct()
    {
        return $this->belongsTo(PharmacyProduct::class, 'pharmacy_product_id');
    }
}
