<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receipt = Receipt::get();
        return $receipt;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oldReceipt = Receipt::Where('order_id', $request->get('order_id'))->first();

        if (!$oldReceipt) {
            $order = Order::Where('id', $request->get('order_id'))->first();
            $order_id = $order->id;
    
            $receipt = new Receipt();
            $receipt->order_id = $order_id;
            $receipt->payment_channel = $request->get('payment_cha');
            $receipt->save();
            $receipt->refresh();
            
            return $receipt;
        }
        else {
            return $oldReceipt;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $receipt = Receipt::Where('id', $id)->first();
        return $receipt;
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
