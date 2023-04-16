<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::get();

        // return view("blog", compact("posts"));
        return view("pages.admin.users", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pages.admin.addUser");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User();
        $user->name = $request->name;
        $user->idNumber = $request->idNumber;
        $user->username = $request->userName;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        if ($request->admin == "on") {
            $user->roleId = '1';
        } else if($request->conductor == "on") {
            $user->roleId = '2';
        } else if($request->driver == "on") {
            $user->roleId = '3';
        }
        $user->save();
        return redirect()->route('admin.users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        //

        $user = User::find($user);

        return view("pages.admin.manageUser", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $user = User::find($request->userId);
        $user->name = $request->name;
        $user->idNumber = $request->idNumber;
        $user->username = $request->userName;
        $user->email = $request->email;
        if ($request->email != null) {
            Hash::make($request->password);
        }
        $user->update();
        return redirect()->route('admin.users');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        //
    }
}
