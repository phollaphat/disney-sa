<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->role = $request->get('role');
        $user->tel = $request->get('tel');
        $product->save();
        $product->refresh();

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::Where('id', $id)->first();
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::Where('id',$id)->first();

        if(($request)->get('name')){
            $user->name = $request->get('name');
        }
        if(($request)->get('email')){
            $user->email = $request->get('email');
        }
        if(($request)->get('password')){
            $user->password = $request->get('password');
        }
        if(($request)->get('tel')){
            $user->name = $request->get('tel');
        }

        $user->save();
        $user->refresh();

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
