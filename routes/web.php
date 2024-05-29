<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ListingController,
    ProfilController,
    PostController
};

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/listing', [ListingController::class, 'index'])->name('listing');
Route::get('creation-annonce', [ListingController::class, 'create'])->name('creation-annonce')->middleware('auth-annonce');
Route::post('/creation-annonce/save', [ListingController::class, 'store'])->name('addAnnonce');
Route::get('/deconnexion', [ProfilController::class, 'deconnexion']);
// Route::get('listing', function () { 
    //     return view('listing');
    // });
Route::get('/profil', [ProfilController::class, 'index'])->name('profil')->middleware('auth');
    // Route::get('profil', function () { 
        //     return view('profil');
        // });
