<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('creation-annonce');
    }

    public function show()
{
    $user = Auth::user();
    $listings = $user->listings;
    return view('profil', compact('user', 'listings'));
}
    
}
