<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $profile_details = User::where('id', auth()->user()->id)->first();

        return view('Backend.profile', compact('profile_details'));
    }
}
