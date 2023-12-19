<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use LDAP\Result;

class BrandsController extends Controller
 {
    public function index()
 {
    $brands=Brands::where('deleted',0)->get();
    return view('Backend.brands',compact('brands'));
    
}

public function store(Request $request)
    {
        // dd($request->all()) ;
        $validatedData=$request->validate([
            'name'=> 'required|string|max:255',]);
$brand['name']=$request->name;
$result =Brands::create($brand);
if ($result)
{
    return 1;
}
    else{
        return 0;
    }
    }
}

