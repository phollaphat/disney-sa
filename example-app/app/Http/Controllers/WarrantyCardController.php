<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Receipt;
use App\Models\WarrantyCard;
use Illuminate\Http\Request;

class warrantyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warrantyCard = WarrantyCard::get();
        return $warrantyCard;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oldWarranty = WarrantyCard::Where('receipt_id', $request->get('receipt_id'))
        ->Where('product_id', $request->get('product_id'))
        ->first();

        if (!$oldWarranty) {
            $product = Product::Where('id', $request->get('product_id'))->first();
            $product_id = $product->id;
    
            $receipt = Receipt::Where('id', $request->get('receipt_id'))->first();
            $receipt_id = $receipt->id;
    
            $warrantyCard = new WarrantyCard();
            $warrantyCard->product_id = $product_id;
            $warrantyCard->receipt_id = $receipt_id;

            $warrantyCard->end_date = date($request->get('date'));
    
            $warrantyCard->save();
            $warrantyCard->refresh();
    
            return $warrantyCard;
        }
        else {
            return $oldWarranty;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $warrantyCard = WarrantyCard::Where('receipt_id', $id)->get();
        return $warrantyCard;
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
