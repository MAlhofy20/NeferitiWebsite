<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['title', 'description', 'image', 'product_id', 'order_number'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
