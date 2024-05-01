<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminsignup');
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
    public function store(Request $request, Admin $admin)
    {
         $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'password'=>'required'
         ]);

         $admin->name=$request->name;
         $admin->mobile=$request->mobile;
         $admin->email=$request->email;
         $admin->password=$request->password;
         $admin->save();
         return view('adminsignin');


    }


    public function  auth(Request $request,Admin $result)
    {

        $email=$request->post('email');
        $password=$request->post('password');
        $result=Admin::where(['email' => $email,'password'=> $password])->get();
        $user="user";
        $count=Admin::select('id')->where(['role'=>$user])->get();
        $counts=count($count);
        session()->flash('counts',$counts);
      // return $result[0];
        if(isset($result[0]->id))
        {
             if($result[0]->role=="admin")
             {
                 return view('dashboard');
             }
             else
             {
                return redirect()->route('home.index',compact('result'));
             }
        }
        else
        {
             $request->session()->flash('error','Invalid Login Credetials');
             return redirect()->back();
        }
    }


    function userDashbord(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
         
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
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
    public function destroy(Admin $admin)
    {
        //
    }
}
