<?php

namespace App\Http\Controllers;

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
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id , Request $request)
    {
        $product=Product::find($id);
        $product->update($request->except('_method','_token'));
        return redirect()->route('product.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $product = Product::find($id);
        return view('products.update', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     // Product::remove($id);
    //     Product::find($id)->delete();
    //     return redirect()->route('product.index');
    // }

    public function destroy(string $id)
    {
        $product = Product::find($id);

        if ($product) {
            if ($product->order()->count() > 0) {
                return redirect()->route('product.index')->with('error', 'Cannot delete product ordered by a customer');
            }

            $product->delete();
        }

        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
