<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
        public function index()
        {
            return view('profil');
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
