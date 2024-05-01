<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('coupon.createcoupon');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coupons = Coupon::get();
        return view('coupon.coupon', compact('coupons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $table = new Coupon;
        $table->code = $request->code;
        $table->name = $request->name;
        $table->max_uses = $request->max_uses;
        $table->max_uses_user = $request->max_uses_user;
        $table->type = $request->type;
        $table->discount_amount = $request->discount_amount;
        $table->min_amount = $request->minimum_amount;
        $table->status = $request->status;
        $table->starts_at = $request->starts_at;
        $table->expires_at = $request->expire_at;
        $table->description = $request->Discription;
        $table->save();
        return redirect()->back()->with("success", "New Coupon is created !!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon, $id)
    {
        $coupon = Coupon::find($id);
        return  view('coupon.editcoupon', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $table = Coupon::find($id);
        $table->code = $request->code;
        $table->name = $request->name;
        $table->max_uses = $request->max_uses;
        $table->max_uses_user = $request->max_uses_user;
        $table->type = $request->type;
        $table->discount_amount = $request->discount_amount;
        $table->min_amount = $request->minimum_amount;
        $table->status = $request->status;
        $table->starts_at = $request->starts_at;
        $table->expires_at = $request->expire_at;
        $table->description = $request->Discription;
        $table->save();
        return redirect()->back()->with('success', "New Coupon is update!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->back();
    }
}
