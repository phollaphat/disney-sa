<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::get();
        return $order;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $user_name = $request->get('user_name');
        $user = User::Where('name', $user_name)->first();
        $user_id = $user->id;
        
        $customer_name = $request->get('customer_name');
        $customer = Customer::Where('name', $customer_name)->first();
        $customer_id = $customer->id;

        $order = new Order();
        
        $order->total_price = $request->get('total');
        $order->user_id = $user_id;
        $order->customer_id = $customer_id;
        $order->save();
        $order->refresh();
        
        return $order;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::Where('id', $id)->first();
        return $order;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function setOrderStatus(Request $request)
    {
        $order = Order::Where('id', $request->get('id'))->first();
        $order->status = "ชำระเงินแล้ว";
        $order->save();
        $order->refresh();

        return $order;
    }
}
