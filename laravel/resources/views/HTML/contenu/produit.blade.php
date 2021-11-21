<!--détails dans le fichier login-->
@extends('layout.contenu')
@section('content2')
            <div class="contenair_produit2">    
                <div class="produit">
                    <div class="flex-box"> <div class="image_produit"><img class="image" src="../images/parapluie.png" alt=article></div></div>
                    <div class="column"><h2>Ninja Umbrella</p>
                        <table>
                            <tr></tr>
                            <tr>
                                <th>Description :</th><td>Ninja Umbrella, the only object that allows you to defend yourself when it's raining !!</td>
                            </tr>
                            <tr>
                                <th>Price : </th><td>15,99$</td>
                            </tr>
                            <tr>
                                <th>Category : </th><td>Accessory</td>
                            </tr>
                            <tr>
                                <th>Quantity : </th><td>9</td>
                            </tr>
                        </table>
                        <input id="bouton" type="submit" value="Buy now !">
                    </div>
                </div>
@endsection