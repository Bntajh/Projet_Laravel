<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commander</title>
</head>
<body>
    <h1>Personnaliser</h1>

    <form method="POST" action="/perso/traitement1" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $produit->id }}">

        <div class="form-group">
            <label for="nom">Nom:</label>
            {{ $produit->nom }}
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            {{ $produit->description }}
        </div>

        <p>Veuillez choisir votre taux de sucres :</p>
        <div>
            <input type="radio" id="sucreChoice1" name="sucre" value="peu" />
            <label for="sucreChoice1">Peu</label>

            <input type="radio" id="sucreChoice2" name="sucre" value="moyen" />
            <label for="sucreChoice2">Moyen</label>

            <input type="radio" id="sucreChoice3" name="sucre" value="beaucoup" />
            <label for="sucreChoice3">Beaucoup</label>
        </div>

        <p>Veuillez choisir la taille:</p>
        <div>
            <input type="radio" id="tailleChoice1" name="taille" value="petit" />
            <label for="tailleChoice1">Petit</label>

            <input type="radio" id="tailleChoice2" name="taille" value="moyen" />
            <label for="tailleChoice2">Moyen</label>

            <input type="radio" id="tailleChoice3" name="taille" value="grand" />
            <label for="tailleChoice3">Grand</label>
        </div>

        <p>Veuillez choisir Toppings: </p>
        <div>
            <input type="radio" id="toppingChoice1" name="topping" value="tapioca" />
            <label for="toppingChoice1">Tapioca</label>

            <input type="radio" id="toppingChoice2" name="topping" value="gout-boisson" />
            <label for="toppingChoice2">Gout De la Boisson</label>

            <input type="radio" id="toppingChoice3" name="topping" value="rien" />
            <label for="toppingChoice3">Rien</label><br><br>
        </div>

        <div class="form-group">
            <a href="/commande" style="cursor:pointer" class="btn btn-primary">Continuer achat</a>
            <a href="/Panier" style="cursor:pointer" class="btn btn-primary">Valider Panier</a>
        </div>
    </form>
</body>
</html>
