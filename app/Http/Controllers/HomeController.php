<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CartData;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Wishlist;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::get();
        $products = Product::get();
        $newArrival = Product::where('new_arrival', "1")->get();

        $data[] = ['category' => $category, 'products' => $products];
        $cartitem = Wishlist::get();
        $count = count($cartitem);
        Session()->flash('count', $count);
        // return $count;
        return view('website.home.home', compact('category', 'products', 'newArrival'));
    }



    public function addCart(Request $request)
    {


        $pid = $request->prodId;

        $qty = 1;
        if (Auth::user()) {
            $user = Auth::user()->id;
            $cartEntry = CartData::where(['product_id' => $pid, 'user_id' => $user])->first();
            $productstatus = Product::where('id', $request->prodId)->first();

            if ($productstatus->status == 1) {
                if ($cartEntry) {
                    $cartEntry->quantity += $qty;
                    $cartEntry->save(); // Save the changes
                    return redirect()->back()->with('error', 'Product already exists in the cart');
                } else {
                    $user = Auth::user()->id;
                    $cartdata = new CartData;
                    $cartdata->user_id = $user;
                    $cartdata->product_id = $pid;
                    $cartdata->quantity += $qty;
                    $cartdata->save();
                    return redirect()->back()->with('success', 'Product added to the cart');
                }
            } else {
                return redirect()->back()->with('error2', 'Products out of stock');
            }
        } else {
            return redirect()->back()->with('error1', 'Please Sign In');
        }

        // $cartdata = new CartData;
        // $userid = Auth::user()->id;
        // $cartdata->product_id = $request->prodId;
        // $cartdata->user_id = $userid;
        // $cartdata->save();

    }

    public function updatetocart(Request $request)
    {
        //return $request->all();
        $user = Auth::user()->id;
        $pid = $request->pid;
        $qty = $request->qty;
        $cartEntry = cartdata::where(['product_id' => $pid, 'user_id' => $user])->first();
        // dd($cartEntry);
        if ($cartEntry) {
            $cartEntry->quantity = $qty;
            $cartEntry->save(); // Save the changes
            return redirect()->back();
        } else {
            $cartdata = new cartdata;
            $cartdata->user_id = $user;
            $cartdata->product_id = $pid;
            $cartdata->quantity = $qty;
            $cartdata->save();
            return redirect()->back();
        }
    }


    public function create()
    {
        //
    }

    public function showcart()
    {
        //return "test";

        if (Auth::user()) {
            $id = Auth::user()->id;
            $carts = CartData::with('products')->where('user_id', $id)->where('status', '0')->get();
            // return $carts;
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
        return view('website.cart.product_cart', compact('carts'));
        // return $products;
        // return view('mycart', compact('products', 'total', 'mrp', 'discount'));
    }


    public function deletefromcart($id)
    {

        $cartdata = CartData::find($id);
        $cartdata->delete();
        return redirect()->back();
    }


    public function updateFromCartTable(Request $request)
    {


        $cartid = $request->cartId;
        $qty = $request->updateqty;
        $cartdata = CartData::find($cartid);
        $cartdata->quantity = $qty;
        $cartdata->save();
        return redirect()->back();
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Admin $admin)
    {
    }


    public function  auth(Request $request, Admin $result)
    {
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin, $id)
    {
    }
}
