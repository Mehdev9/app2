<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
        public function index()
        {
            $listings = listing::all();
            return view('profil', compact('listings'));
        }

        public function show($id)
        {
            $user = request('name');
            return view('profil', [
                'user' => $user
            ]);
        }

        public function deconnexion()
        {
            auth()->logout();
            return redirect('/home');
        }
}
