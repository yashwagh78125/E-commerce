<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BillAddress;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $ordersum = 0;
        $user = "user";
        $countuser = count(User::select('id')->where(['role' => $user])->get());
        $countorder = count(BillAddress::get());
        $ordertotal = Order::selectRaw('SUM(order_total) as total')->groupBy('id')->get();

        foreach ($ordertotal as $total) {
            $ordersum += $total->total;
        }

        session()->flash('countuser', $countuser);
        session()->flash('countorder', $countorder);
        session()->flash('ordersum', $ordersum);
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function show()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
    }


    public function  auth()
    {
    }
    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
    }
}
