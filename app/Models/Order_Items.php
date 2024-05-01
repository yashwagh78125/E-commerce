<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
