<?php

namespace App\Http\Controllers;

use App\Models\Order_Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\CartData;
use App\Models\Product;
use App\Models\BillAddress;
use App\Models\Coupon;

class OrderItemsController extends Controller
{

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
        if (Auth::check()) {
            $user_id = Auth::id();
            $order = new Order;
            $order->user_id = $user_id;
            $order->save();

            $total = 0;


            $carts = CartData::where('user_id', $user_id)->get();
            foreach ($carts as $product) {
                $orderitem = new Order_Items;
                $orderitem->user_id = $user_id;
                $orderitem->order_id = $order->id;
                $orderitem->product_id = $product->product_id;
                $orderitem->qty = $product->quantity;

                $prod = Product::where('id', $product->product_id)->first();

                if ($prod) { // Ensure product exists before using its properties
                    $orderitem->price = $prod->offer_price;
                    $orderitem->subtotal = $prod->offer_price * $product->quantity; // Corrected subtotal calculation
                    $total += $orderitem->subtotal;
                    $orderitem->save();
                    $cart = CartData::where('product_id', $product->product_id)->first();
                    $cart->delete();
                }
            }

            // Update order total

            $order->total = $total;
            $order->shipping = floor($total * 0.01);
            $order->order_total = floor($total + $order->shipping);
            $order->save();

            return redirect()->route('order.show');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Order_Items $order_Items)
    {
        $order = Order::where('id', Order::max('id'))->first();

        $orderitem = Order_Items::with('products')->where('order_id', $order->id)->get();
        //return $orderitem;
        $products = $orderitem->map(function ($cart) {
            return $cart->products;
        })->flatten();
        return view('website.checkout.checkout', compact('order', 'orderitem', 'products'));
    }




    public function storeBillingDetails(Request $request)
    {


        $billaddress = new BillAddress;
        $billaddress->fname = $request->fname;
        $billaddress->lname = $request->lname;
        $billaddress->company_name = $request->company;
        $billaddress->country = $request->country;
        $billaddress->street = $request->street;
        $billaddress->city = $request->city;
        $billaddress->state = $request->state;
        $billaddress->mobno = $request->mobno;
        $billaddress->email = $request->email;
        $billaddress->order_note = $request->order_note;
        $billaddress->order_id = $request->order_id;
        $billaddress->save();
        return redirect()->back()->with('success', "Billing address store");
    }



    public function getCouponCode(Request $request)
    {
        $code = $request->code;

        // Retrieve the coupon based on the provided code
        $coupon = Coupon::where('code', $code)->first();

        if (!$coupon) {
            // Coupon not found, return an appropriate response
            return redirect()->back()->with('error', 'Coupon not found');
        }

        // Retrieve the applied coupons from session
        $appliedCoupons = session()->get('applied_coupons', []);

        // Check if the coupon has already been applied
        if (in_array($code, $appliedCoupons)) {
            return redirect()->back()->with('error', 'Coupon has already been applied.');
        }

        $cart = Cartdata::get();

        if (Auth::user()->id && $cart) {
            // Assuming $order = Order::findOrFail($orderId); where $orderId is the ID of the order
            $order = Order::where('id', Order::max('id'))->first();
            if ($coupon->type == 'percent')
                if ($order->total >= $coupon->min_amount) {
                    $percent_discount = ($order->order_total * $coupon->discount_amount) / 100;
                    $order->order_total -= Intval($percent_discount);

                    // Add the current coupon code to the array of applied coupons
                    $appliedCoupons[] = $code;

                    // Store the updated array of applied coupons back in the session
                    session(['applied_coupons' => $appliedCoupons]);

                    $order->save();
                    return redirect()->back()->with('success', 'Coupon applied successfully!');
                } else {
                    return redirect()->back()->with('error', 'Minimum order total not met for coupon.');
                }
            else {
                if ($order->total >= $coupon->min_ammount) {
                    // Apply the discount amount of the coupon to the order
                    // return $discount;
                    $order->order_total -= $coupon->discount_amount;

                    // Add the current coupon code to the array of applied coupons
                    $appliedCoupons[] = $code;

                    session(['applied_coupons' => $appliedCoupons]);

                    $order->save();
                    return redirect()->back()->with('success', 'Coupon applied successfully!');
                } else {
                    return redirect()->back()->with('error2', 'Minimum order total not met for coupon.');
                }
            }
        }




        // $code = $request->code;

        // // Retrieve the coupon based on the provided code
        // $coupon = Coupon::where('code', $code)->first();

        // $cart = Cartdata::get();

        // if (Auth::user()->id) {
        //     if ($cart) {

        //         if ($coupon) {
        //             // Assuming $order = Order::findOrFail($orderId); where $orderId is the ID of the order
        //             $order = Order::where('id', Order::max('id'))->first();

        //             if ($order->total >= $coupon->min_amount) {
        //                 $order->order_total -= $coupon->discount_amount;
        //                 $order->total -= $coupon->discount_amount;
        //             }


        //             $order->save();
        //             return  redirect()->back();
        //         } else {
        //             // Coupon not found, return an appropriate response
        //             return "Coupon not found";
        //         }
        //     }
        // }

    }

    public function edit(Order_Items $order_Items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order_Items $order_Items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order_Items $order_Items)
    {
        //
    }
}
