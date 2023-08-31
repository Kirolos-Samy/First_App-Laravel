<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        return response()->json(['data' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     // Crete Function was used to VIEW create page ,, In Api we don't need it
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|regex:/^[A-Za-z]+$/|min:3|max:40',
            'price' => 'required|numeric',
            'availability' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);
        try {
            $product = Product::create($request->all());
            return response()->json(['data' => $product]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Server is not available now']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json(['data' => $product]);
        }
        return response()->json(['message' => 'Product not found']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id , Request $request)
    {
        $product = Product::find($id);
        $request->validate([
            'name'  => 'regex:/^[A-Za-z]+$/|min:3|max:40',
            'price' => 'numeric',
            // 'availability' => 'required',
            'category_id' => 'exists:categories,id'
        ]);
        if ($product) {
            $product->update($request->all());
            return response()->json(['data' => $product , 'message' => 'Product updated successfully']);
        }
        return response()->json(['message' => 'Product not found']);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(string $id)
    // {
    //     // Update Function was used to VIEW update page ,, In Api we don't need it

    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['data' => $product , 'message' => 'Product deleted successfully']);
        }
        return response()->json(['message' => 'Product not found']);
    }
}
