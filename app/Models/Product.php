<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'image', 'meta_title', 'meta_description', 'meta_keywords', 'status', 'slug'];

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
