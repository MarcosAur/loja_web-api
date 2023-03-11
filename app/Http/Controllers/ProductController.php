<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use mysql_xdevapi\Collection;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
