<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table="subcategories";
    public $guarded = [];

    public function category(){
        return $this->hasOne(Category::class, 'id','cat_id');
    }
}
