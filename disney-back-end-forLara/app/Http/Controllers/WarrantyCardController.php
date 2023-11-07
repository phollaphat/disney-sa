<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Receipt;
use App\Models\WarrantyCard;
use Illuminate\Http\Request;

class WarrantyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $WarrantyCard = WarrantyCard::get();
        return $WarrantyCard;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oldWarranty = WarrantyCard::Where('product_id', $request->get('product_id'))
        ->where('receipt_id', $request->get('receipt_id'))
        ->get();

        if (count($oldWarranty) == 0) {
            $product = Product::Where('id', $request->get('product_id'))->first();
            $product_id = $product->id;
    
            $receipt = Receipt::Where('id', $request->get('receipt_id'))->first();
            $receipt_id = $receipt->id;
    
            $WarrantyCard = new WarrantyCard();

            $WarrantyCard->product_id = $product_id;
            $WarrantyCard->receipt_id = $receipt_id;

            $WarrantyCard->end_date = $request->get('date');
    
            $WarrantyCard->save();
            $WarrantyCard->refresh();
    
            return $WarrantyCard;
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
        $WarrantyCard = WarrantyCard::Where('receipt_id', $id)
        ->with('product')
        ->get();

        return $WarrantyCard;
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
