<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

    {public function index()
        {
           $product=Product::where('deleted',0)->get();
           return view('Backend.products',compact('product'));
           
       }
       }

      