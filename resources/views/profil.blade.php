@extends('layout')
<link rel="stylesheet" href="css/profil.css">
@include('includes/nav')
<h1 class="text-light" >Mon compte locotrust</h1>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h5>Bienvenue sur votre profil {{\Illuminate\Support\Facades\Auth::user()->name}} !</h5>
        </div>
        <div class="col-3"></div>

        <div class="row">

                <p>Voici vos annonces actuellement en ligne :</p>
                @foreach ($listings as $listing)
                    <ul>
                        <li><img style="width: 90px; height: 50px;" src="{{asset($listing->image)}}" alt="maison"> Annonce n°{{ $listing->id }} :  {{ $listing->type }} {{ $listing->style }} au prix de {{ $listing->prix }}€   :: Annonce postée le {{$listing->created_at->format('d/m/Y')}}  </li>
                        
                    </ul>
                @endforeach
                
        </div>

</div>
