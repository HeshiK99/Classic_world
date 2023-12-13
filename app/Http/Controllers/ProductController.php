<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

    {public function index()
        {
           $product=Product::where('delete',0)->get();
           dd($product);
           
       }
       }

