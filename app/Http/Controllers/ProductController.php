<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();

        Product::create($validated);

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(ProductStoreRequest $request, Product $product)
    {
        $validated = $request->validated();
        $product->update($validated);
        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
