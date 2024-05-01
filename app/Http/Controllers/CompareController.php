<?php

namespace App\Http\Controllers;

use App\Models\Compare;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{

    public function AddToCompare($id)
    {
        if (Auth::user()) {
            $uid = Auth::user()->id; // Check if the product ID already exists for the current user
            $compare = Compare::where('product_id', $id)
                ->where('user_id', $uid)
                ->first();


            if ($compare) {
                // Product already exists in the cart for this user
                // You can handle this case, e.g., show a message or update the quantity
                return redirect()->back()->with('error', 'Product already in Compare');
            } else {
                // Product doesn't exist in the cart for this user, so add it
                $compareData = new Compare;
                $compareData->product_id = $id;
                $uid = Auth::user()->id;
                $compareData->user_id = $uid;
                $compareData->save();

                return redirect()->back()->with('success', 'Product added to the Compare');
            }
        } else {
            return redirect()->back()->with('error1', 'Please Sign In');
        }
    }


    // public function index($id)
    // {
    //     // Check if the product ID already exists for the current user
    //     //return $uid;
    //     $allproduct = Product::all();
    //     // return $allproduct;
    //     $products = Product::find($id);
    //     //  return $products;
    //     return view('website.compare.compare', compact('products', 'allproduct'));
    // }





    public function showCompare()
    {

        if (Auth::user()) {
            $uid = Auth::user()->id;

            $compare = Compare::where('user_id', $uid)->first();

            if (Auth::user()) {

                $carts = Compare::with('products')->where('user_id', $uid)->get();
                $products = $carts->map(function ($cart) {
                    return $cart->products;
                })->flatten();
                //return $products;

            } else {
                $carts = [];
            }
            return view('website.compare.compare', compact('products'));
        } else {
            return redirect()->back()->with('error1', 'Please sign In');
        }
    }

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Compare $compare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compare $compare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compare $compare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compare $compare, $id)
    {
        $compare = Compare::where('id', $id)->first();
        $compare->delete();
        return redirect()->back();
    }
}
