<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        return view('product.index')
            ->with('products', $product->paginate(30));
    }
    
    public function show($id)
    {
        return view('product.show')
            ->with('product', Product::find($id));
    }
}
