<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return new ProductCollection($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Product::truncate();
        Product::factory()->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name'=>'required|string|max:100',
            'price'=>'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->save();

        return response()->json(['Produkt je napravljen',
        new ProductResource($product)]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'product_name'=>'required|string|max:100',
            'price'=>'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->save();
        return response()->json(['Produkt je azuriran',
        new ProductResource($product)]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['Produkt je obrisan',
        new ProductResource($product)]);
    }
}
