@extends('layout')

<link rel="stylesheet" href="{{asset('css/listing.css')}}">

@include('includes/nav')


<div class="container">
    <h1 class="">Trouvez votre logement ici</h1>
    
    <div class="ann">
    @foreach ($listings as $listing)
      <div class="card bg-light mb-3 carte">
        <h4 class="card-header">{{$listing->type}}</h4>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
            <rect width="100%" height="100%" fill="#868e96"></rect>
            <text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
          </svg> --}}
          <img src="{{asset($listing->image)}}" alt="maison">
        <div class="card-body">
          <h6 class="card-title">{{$listing->style}}</h6>
          <p class="card-text">{{$listing->prix}}€</p>
          <p class="card-text">{{$listing->surface}}m²</p>
          <p class="card-text">{{$listing->piece}} pièces</p>
        </div>
        <div class="card-footer text-muted bg-info">
            Posté le {{$listing->created_at->format('d/m/Y')}}
          </div>
      </div>
      @endforeach
    </div>
    <div class="pag">
    {{$listings->links()}}
</div>
</div>


    
    </div>
    @include('includes.footer')