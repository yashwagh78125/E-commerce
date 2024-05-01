<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Coupon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('product.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $category = Category::orderBy('name', 'ASC')->get();
        $subcategory = Subcategory::orderBy('name', 'ASC')->get();
        //return $subcategory;
        $brands = Brand::orderBy('name', 'ASC')->get();

        return view('product.createproduct', compact('category', 'subcategory', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate(
            [
                'status' => 'required'
            ]
        );

        // return "test";
        $product = new Product();

        $product->title = $request->title;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->offer_price = $request->offerprice;
        $product->compare_price = $request->compare_price;
        $product->category_id = $request->category;
        $product->subcat_id = $request->sub_category;
        $product->brand_id = $request->brand;
        $product->is_featured = $request->is_featured;
        $product->sku = $request->sku;
        $product->barcode = $request->barcode;
        $product->track_qty = $request->track_qty;
        $product->qty = $request->qty;
        $product->status = $request->status;
        $product->new_arrival = $request->new_arrival;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('image', $imageName);
        } else {
            $imageName = '';
        }
        $product->Product_img = $imageName;

        if ($request->hasFile('images')) {
            $imagesNames = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move('images', $imageName);
                $imageNames[] = $imageName;
            }
            $product->images = json_encode($imageNames);
        } else {
            $product->images = json_encode([]);
        }
        
        $product->save();
        session()->flash('success', "Product Added Successfully !!!");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $products = Product::where('id', $id)->first();
        $category = Category::get();
        $subcategory = Subcategory::get();
        $brands = Brand::get();
        // return $products;
        return view('product.edit_product', compact('products', 'category', 'subcategory', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {



        $product = Product::find($request->prodId);
        $product->title = $request->title;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->offer_price = $request->offerprice;
        $product->compare_price = $request->compare_price;
        $product->category_id = $request->category;
        $product->subcat_id = $request->sub_category;
        $product->brand_id = $request->brand;
        $product->is_featured = $request->is_featured;
        $product->sku = $request->sku;
        $product->barcode = $request->barcode;
        $product->track_qty = $request->track_qty;
        $product->qty = $request->qty;
        $product->status = $request->status;
        $product->new_arrival = $request->new_arrival;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('image', $imageName);
            $filePath = public_path('image/' . $product->image);

            if (is_file($filePath)) {
                unlink($filePath);
            }
            $product->product_img = $imageName;
        }


        if ($request->hasFile('images')) {
            $imagesPaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move('images', $imageName);
                $imagePaths[] = $imageName;
            }
            $oldImages = json_decode($product->images, true);

            foreach ($oldImages as $oldImagePath) {
                $oldFilePath = public_path($oldImagePath);
                if (is_file($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
            $product->images = json_encode($imagePaths);
        }

        $product->save();
        session()->flash('success', "Product updated Successfully !!!");
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function ShowCoupons()
    {
        $coupons = Coupon::get();
        return view('website.coupons.coupon', compact('coupons'));
    }
}
