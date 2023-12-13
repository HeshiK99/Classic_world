<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{public function index()
    {
       $categories=Categories::where('delete',0)->get();
       dd($categories);
       
   }
   }
