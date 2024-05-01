<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CartData;
use App\Models\Product;

class WishlistController extends Controller
{

    public function addWishlist(Request $request, $id = null)
    {



        if (Auth::user()) {
            $uid = Auth::user()->id;
            $WishlistEntry = Wishlist::where('product_id', $id)->first();
            if ($WishlistEntry) {


                return redirect()->back()->with("error", "Product already exist in Wishlist");
            } else {
                $uid = Auth::user()->id;
                $wishlistdata = new Wishlist;
                $wishlistdata->user_id = $uid;
                $wishlistdata->product_id = $id;
                $wishlistdata->save();
                return redirect()->back()->with('success', 'Product added to the Wishlist');
            }
        } else {
            return redirect()->back()->with('error', 'Please Sign In');
        }
    }






    public function showWishList(Request $request)
    {

        if (Auth::user()) {
            $uid = Auth::user()->id;

            $Wishlist = CartData::where('product_id', $request->prodId)->where('user_id', $uid)->first();

            if (Auth::user()) {

                $carts = Wishlist::with('products')->where('user_id', $uid)->where('status', '1')->get();
                $products = $carts->map(function ($cart) {
                    return $cart->products;
                })->flatten();

                // $total = $products->pluck('price')->sum();
                // $mrp = $products->pluck('mrp')->sum();
                // $discount = $products->pluck('discount')->average();
            } else {
                $carts = [];
                $total = 0;
                $mrp = 0;
                $discount = 0;
            }
            return view('website.wishlist.wishlist', compact('carts', 'products'));
        } else {
            return redirect()->back()->with('error1', 'Please sign In');
        }
        // return $products;
    }   // return view('mycart', compact('products', 'total', 'mrp', 'discount'));





    public function addanddestroy(Request $request)
    {

        if (Auth::user()) {
            $uid = Auth::user()->id; // Check if the product ID already exists for the current user
            $Wishlist = CartData::where('product_id', $request->prodId)
                ->where('user_id', $uid)
                ->first();
            // return $existingCart;
            $productstatus = Product::where('id', $request->prodId)->first();
            // return $productstatus;
            if ($productstatus->status == 1) {
                if ($Wishlist) {
                    // Product already exists in the cart for this user
                    // You can handle this case, e.g., show a message or update the quantity
                    return redirect()->back()->with('error', 'Product already exists in the Wishlist');
                } else {
                    // Product doesn't exist in the cart for this user, so add it
                    $wishlistdata = new CartData;
                    $wishlistdata->product_id = $request->prodId;
                    $uid = Auth::user()->id;
                    $wishlistdata->user_id = $uid;
                    $wishlistdata->save();
                    $wishlist = Wishlist::where('product_id', $request->prodId)->first();
                    $wishlist->delete();

                    return redirect()->back()->with('success', 'Product added to the Wishlist');
                }
            } else {
                return redirect()->back()->with('error2', 'Products out Of Stock');
            }
        } else {
            return redirect()->back()->with('error1', 'Please Sign In');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteFromWishlist($id)
    {
        //return $id;
        $wishlist = Wishlist::where('product_id', $id)->first();
        $wishlist->delete();
        return redirect()->back();
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
