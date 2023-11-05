<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return $products;
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
        $product = new Product();
        $product->model_code = $request->get('model_code');
        $product->category = $request->get('category');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->size = $request->get('size');
        $product->stock_quantity = $request->get('quantity');
        $product->save();
        $product->refresh();

        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::Where('id', $id)->first();
        return $product;
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
        $product = Product::Where('id', $id)->first();

        if($request->get('name')){
            $product->name = $request->get('name');
        }
        if($request->get('price')){
            $product->price = $request->get('price');
        }
        if($request->get('quantity')){
            $product->stock_quantity = $request->get('quantity');
        }
        if($request->get('category')){
            $product->category = $request->get('category');
        }

        $product->save();
        $product->refresh();

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ReduceProductQTY(Request $request)
    {
        $product = Product::Where('name', $request->get('product_name'))->first();
        $product->stock_quantity = $product->stock_quantity - intval($request->get('qty'));
        $product->save();
        $product->refresh();

        return $product;
    }
}
