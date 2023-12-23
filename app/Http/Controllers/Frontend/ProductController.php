<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($product_id)
    {
        $product_details = Product::where('id', $product_id)->first();

        return view('Frontend.single-product', compact('product_details'));
    }
}