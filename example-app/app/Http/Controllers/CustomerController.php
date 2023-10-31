<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::get();
        return $customer;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $all_customer = Customer::get();
        $customer_tar = Customer::Where('tel', $request->get('tel'))->orWhere('name', $request->get('name'))->first();
        if ($customer_tar) {
            return $customer_tar;
        }
        else {
            $customer = new Customer();
            $customer->tel = $request->get('tel');
            $customer->name = $request->get('name');
            $customer->save();
            $customer->refresh();
            return $customer;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::Where('id', $id)->first();
        return $customer;
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
}
