<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="{{ asset('css/commande.css')}}">

</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href='/HomePage'>  
                    <img src="images/logo.png" alt="" width="300"/> 
                </a>  
            </div>
            <nav>
                <ul>
                    <li><a href="/commande">SHOP  </a></li>
                    <li><a href="/contact">CONTACT</a></li>
                    <li><a href="/Panier">BASKET</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <table>
        <tr>

        </tr>
  
@foreach ($produit as $prod)
<tr>
    <td>
        <div class="row">
            <div class="card">
                <div class="image">
                    <img src="{{ asset($prod->image) }}" alt="bubble_tea_image">
                </div>
                <span class="title">{{$prod->nom}}</span>
                <span class="price">{{$prod->prix}}</span>
            </div>
        </div>
        {{-- <a href="/perso?id={{ $prod->id }}" class="buy-button">Personnaliser Votre Choix</a>  --}}
        <a href="{{  route('modif_perso', ['id' => $prod->id]) }}" class="buy-button">Personnaliser Votre Choix</a> 
    </td>
</tr>
@endforeach

    </table>

</body>
</html>
