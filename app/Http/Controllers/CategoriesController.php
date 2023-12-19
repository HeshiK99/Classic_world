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
    public function store(Request $request)
    {
        // dd($request->all()) ;
        $validatedData=$request->validate([
            'name'=> 'required|string|max:255',
            'brand_id'=> 'required|int',]);
$categories['name']=$request->name;
$categories['brand_id']=$request->brand_id;
$result =Categories::create($categories);
if ($result)
{
    return 1;
}
    else{
        return 0;
    }
    }
}

