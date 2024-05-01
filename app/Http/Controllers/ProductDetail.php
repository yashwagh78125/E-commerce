<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetail extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        return view('website.productdetail.product_detail', compact('product'));
    }


    public function show($id)
    {
        $product = Product::find($id);
    }
}
