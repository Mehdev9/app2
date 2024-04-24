@extends('layout')

<form method="POST">
    @csrf
    <fieldset>
        <h1>Créer votre annonce</h1>
        <legend>Type de bien

            <div>
                <input type="radio" id="maison" name="drone" value="maison" checked />
                <label for="maison">Maison</label>
            </div>

            <div>
                <input type="radio" id="terrain" name="drone" value="terrain" />
                <label for="terrain">Terrain</label>
            </div>

            <div>
                <input type="radio" id="appartement" name="drone" value="appartement" />
                <label for="appartement">Appartement</label>
            </div>
            <div>
                <input type="radio" id="entrepot" name="drone" value="entrepot" />
                <label for="entrepot">Entrepot</label>
            </div>
        </legend>




        <legend>style du bien

            <div>
                <input type="radio" id="contemporain" name="drone" value="contemporain" checked />
                <label for="contemporain">Contemporain</label>
            </div>

            <div>
                <input type="radio" id="traditionel" name="drone" value="traditionel" />
                <label for="traditionel">Traditionel</label>
            </div>

            <div>
                <input type="radio" id="moderne" name="drone" value="moderne" />
                <label for="moderne">Moderne</label>
            </div>
            <div>
                <input type="radio" id="provençale" name="drone" value="provençale" />
                <label for="provençale">Provençale</label>
            </div>
        </legend>

        <div class="mb-3">
            <label for="titre" class="form-label">Image du bien </label>
            <input type="file" class="form-control" id="titre">
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix :</label>
            <input type="number" class="form-control" id="prix">
        </div>
        <div class="mb-3">
            <label for="surface" class="form-label">Surface :</label>
            <input type="text" class="form-control" id="surface">
        </div>
        <div class="mb-3">
            <label for="nbpiece" class="form-label">Nombre de pièces :</label>
            <input type="text" class="form-control" id="nbpiece">
        </div>
        <div>
            <label for="meuble" class="form-label">Meublé :</label>
            <input type="radio" id="oui" name="drone" value="oui" />
            <label for="oui">Oui</label>
            <input type="radio" id="non" name="drone" value="non" />
            <label for="non">Non</label>
        </div>
        <div class="mb-3">
            <label for="article" class="form-label">description du bien :</label>
            <textarea class="form-control" id="article"></textarea>
        </div>
        <div class="mb-3">
            <label for="mots" class="form-label">Mots-clefs :</label>
            <input type="text" class="form-control" id="mots"></input>
        </div>

        <div>
            <button type="submit" class="btn btn-danger">Retour</button>
            <button type="submit" class="btn btn-success">Poster mon annonce</button>
        </div>
    </fieldset>
</form>
