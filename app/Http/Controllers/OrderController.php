<?php

namespace App\Http\Controllers;

use App\Models\BillAddress;
use App\Models\Order;
use App\Models\Order_Items;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $BillingDetails = BillAddress::get();
        return view('orders.orders', compact('BillingDetails'));
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
    public function show($id)
    {
        $orderItems = Order_Items::with('products')->where('order_id', $id)->get();
        return view('orders.orderitems', compact('orderItems'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
