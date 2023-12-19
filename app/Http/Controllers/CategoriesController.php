<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::where('deleted', 0)->get();
        $brands = Brands::where('deleted',0)->get();
        return view('Backend.categories', compact('categories','brands'));
    }
}
