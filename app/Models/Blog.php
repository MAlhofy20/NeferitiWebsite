<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
