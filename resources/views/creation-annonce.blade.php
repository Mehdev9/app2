@extends('layout')


<link rel="stylesheet" href="{{ asset('css/formcrea.css') }}">


{{-- ==================================================nav============================================== --}}

@include('includes/nav')

{{-- ==================================================nav============================================== --}}


<div class="container">


    <form class="form" method="POST" enctype='multipart/form-data' action="{{route('addAnnonce')}}">
        @csrf
        <fieldset>
            <h1 id="titre">Créer votre annonce</h1>
            <hr>
            
            {{-- =========================================================type============================================ --}}
            
            <h3 class="mb-4" id="leg1">Type de bien</h3>
            <div id="type">
                
                
                <div>
                    <input class="radio" type="radio" id="maison" name="type" value="maison" />
                    <label for="maison" class="icon animate__heartBeat">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                        </svg><br>Maison <br>
                    </label>
                </div>

                <div>
                    <input class="radio" type="radio" id="terrain" name="type" value="terrain" />
                    <label for="terrain" class="icon animate__heartBeat">
                        <label for="terrain"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                            d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411" />
                        </svg><br> Terrain</label>
                    </label>
                </div>
                <div>
                    <input class="radio" type="radio" id="appartement" name="type" value="appartement" />
                    <label for="appartement" class="icon animate__heartBeat">
                        <label for="appartement"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path
                            d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                            </svg><br> Appartement</label>
                        </label>
                </div>
                <div>
                    <input class="radio" type="radio" id="entrepot" name="type" value="entrepot" />
                    <label for="entrepot" class="icon animate__heartBeat">
                        <label for="entrepot"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <path
                                    d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z" />
                            </svg><br> Entrepot</label>
                        </label>
                    </div>
                    
                </div>

            {{-- =====================================================================style============================================= --}}


            <h3 class="mb-4 mt-4" id="leg2">style du bien</h3>
            <div id="style">
                <div>
                    <input class="radio" type="radio" id="contemporain" name="style" value="contemporain" />
                    <label for="contemporain" class="style">
                        <label for="contemporain">contemporain</label>
                    </label>
                </div>
                <div>
                    <input class="radio" type="radio" id="traditionel" name="style" value="traditionel" />
                    <label for="traditionel" class="style">
                        <label for="traditionel">Traditionel</label>
                    </label>
                </div>
                <div>
                    <input class="radio" type="radio" id="moderne" name="style" value="moderne" />
                    <label for="moderne" class="style">
                        <label for="moderne">Moderne</label>
                    </label>
                </div>
                <div>
                    <input class="radio" type="radio" id="provençale" name="style" value="provençale" />
                    <label for="provençale" class="style">
                        <label for="provençale">Provençale</label>
                    </label>
                </div>
            </div>

            
            {{-- =====================================================================infos============================================= --}}

            <h3 class="mb-4 mt-4">infos du bien</h3>
            <div class="row" id="infos">
                <div class="mb-3">
                    <label for="titre" class="form-label">Image du bien </label>
                    <input type="file" class="form-control" id="titre" name="image">
                </div>
                <div class="mb-3">
                    <label for="prix" class="form-label">Prix (€) :</label>
                    <input type="number" class="form-control" id="prix" name="prix">
                </div>
                <div class="mb-3">
                    <label for="surface" class="form-label">Surface (m²) :</label>
                    <input type="number" class="form-control" id="surface" name="surface">
                </div>
                <div class="mb-3">
                    <label for="nbpiece" class="form-label">Nombre de pièces :</label>
                    <input type="number" class="form-control" id="nbpiece" name="piece">
                </div>
                <div>
                    <label for="meuble" class="form-label">Meublé :</label>
                    <input type="radio" id="oui" name="meuble" value="oui" />
                    <label for="oui">Oui</label>
                    <input type="radio" id="non" name="meuble" value="non" />
                    <label for="non">Non</label>
                </div>
                <div class="mb-3">
                    <label for="article" class="form-label">description du bien :</label>
                    <textarea class="form-control" id="article" name="desc"></textarea>
                </div>
                <div class="mb-3">
                    <label for="mots" class="form-label">Mots-clefs (5 mots) :</label>
                    <input type="text" class="form-control" id="mots" name="motClef"></input>
                </div>
            </div>
            
            {{-- =====================================================================infos============================================= --}}
            
            <div class="row" id="btn">
                
                <button type="submit" class="btn btn-success" id="valider">Poster mon annonce</button>
                <button type="button" class="btn btn-danger" id="retour"><a href="home">Retour </a></button>
            </div>
        </fieldset>
    </form>
    
</div>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script> --}}

@include('includes/footer')
</body>
