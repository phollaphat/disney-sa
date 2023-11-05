<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductList;
use Illuminate\Http\Request;


class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productLists = ProductList::get();
        return $productLists;
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
        $product_name = $request->get('product_name');
        $product = Product::Where('name', $product_name)->first();
        $product_id = $product->id;

        $order = $request->get('order_id');
        $order = Order::Where('id', $order)->first();
        $order_id = $order->id;

        $product_list = new ProductList();
        $product_list->product_id = $product_id;
        $product_list->order_id = $order_id;
        $product_list->quantity = $request->get('qty');
        $product_list->price_sum = $request->get('subtotal');
        $product_list->save();
        $product_list->refresh();

        return $product_list;
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
