<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Order_Items;

class MyAccountController extends Controller
{
    public function index()
    {


        if (Auth::user()) {
            $userid = Auth::user()->id;
            $orders = Order::where('user_id', $userid)->get();
            return view('website.myaccount.myaccount', compact('orders'));
        } else {
            $orders = [];
            return view('website.myaccount.myaccount', compact('orders'));
        }
    }


    public function getOrderDetails($id)
    {
        $orderItems = Order_Items::with('products')->where('order_id', $id)->get();
        // return $orderItems;
        return view('website.myaccount.vieworder', compact('orderItems'));
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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
