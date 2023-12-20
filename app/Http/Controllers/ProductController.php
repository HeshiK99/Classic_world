<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::where('deleted',0)->get();
        $categories = Categories::where('deleted', 0)->get();
        return view('Backend.products',compact('product','categories'));
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|string|max:255',
            'category_id'=> 'required|int',
            'price'=>'required|int',
            'quantity'=>'required|int'

        ]);

        $product['name'] = $request->name;
        $product['category_id'] = $request->category_id;
        $product['price'] = $request->price;
        $product['quantity'] = $request->quantity;

        $result = Product::create($product);

        if ($result)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
}

       

      