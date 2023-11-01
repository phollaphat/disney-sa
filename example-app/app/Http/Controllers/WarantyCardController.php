<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Receipt;
use App\Models\WarantyCard;
use Illuminate\Http\Request;

class WarantyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warantyCard = WarantyCard::get();
        return $warantyCard;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oldWaranty = WarantyCard::Where('receipt_id', $request->get('receipt_id'))->first();

        if (!$oldWaranty) {
            $product = Product::Where('id', $request->get('product_id'))->first();
            $product_id = $product->id;
    
            $receipt = Receipt::Where('id', $request->get('receipt_id'))->first();
            $receipt_id = $receipt->id;
    
            $warantyCard = new WarantyCard();
            $warantyCard->product_id = $product_id;
            $warantyCard->receipt_id = $receipt_id;
    
            $date = strtotime($request->get('end_date')); // แปลง string เป็น timestamp
            $dateObject = date("Y-m-d", $date); // แปลง timestamp เป็น string ที่มีรูปแบบของ
            $warantyCard->end_date = $dateObject;
    
            $warantyCard->save();
            $warantyCard->refresh();
    
            return $warantyCard;
        }
        else {
            return $oldWaranty;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $warantyCard = WarantyCard::Where('id', $id)->first();
        return $warantyCard;
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
