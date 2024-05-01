<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $role = "user";
        $users = User::select('users.*')->where('role', $role)->paginate(10);
        return view('users.users', compact('users'));
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
        $role = "user";
        $users = User::paginate(1); //select('admins.*')->where('role',$role);
        return $users;
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
        $users = Admin::find($id);
        $users->delete();
        return redirect()->back();
    }
}
