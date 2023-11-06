<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Claim;
use App\Models\User;
use App\Models\WarrantyCard;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $claim = Claim::with('product', 'customer')->get();
        return $claim;
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
        $customer = Customer::Where('tel', $request->get('tel'))->first();
        $user = User::Where('name', $request->get('user_name'))->first();
        $warrantyCard = WarrantyCard::Where('id', $request->get('warrantyCard_id'))->first();
        $product = Product::Where('name', $request->get('product_name'))->first();

        $claim = new Claim();
        $claim->product_id = $product->id;
        $claim->user_id = $user->id;
        $claim->customer_id = $customer->id;
        $claim->warranty_card_id = $warrantyCard->id;

        $claim->save();
        $claim->refresh();

        return $claim; 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
