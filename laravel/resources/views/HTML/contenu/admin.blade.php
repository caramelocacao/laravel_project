@extends('layout.connexion')

@section('content')
            <div class="produit2">
            <div class="flex-box"> <div class="image_produit"><img class="image" src="../images/parapluie.png" alt=article></div></div>
            <div class="column">
                <table>
                    <tr></tr>
                    <tr>
                        <br><label for="titre">Titre :</label><input type="text" id="titre" name="titre"><br><br>
                    </tr>
                    <tr>
                        <label for="titre">Description :</label><input type="description" id="description" name="description"><br><br>
                    </tr>
                    <tr>
                    <label for="Prix">Prix :</label><input type="text" id="prix" name="prix"><br><br>
                    </tr>
                    <tr>
                        <label for="Category">Category :</label><input type="text" id="categorie" name="cayegorie"><br><br>
                    </tr>
            
                    <input id="bouton" type="submit" value="Valider"> 
                </table>
            </div>
            </div>

@endsection 
