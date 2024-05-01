<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function subcategory()
    {
        return $this->hasMany(Subcategory::class, 'id', 'subcat_id');
    }
}
