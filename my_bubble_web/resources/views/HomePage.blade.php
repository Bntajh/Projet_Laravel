<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <header class= "header">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="" width="300"/>
            </div>
            <nav>
            <ul>
                <li><a href="/login">CONNEXION</a></li>
                <li><a href="/commande">SHOP</a></li>
                <li><a href="/contact">CONTACT</a></li>
                <li><a href="/Panier">PANIER</a></li>
            </ul>

            </nav>
        </div>
    </header>

    <section>
        <div class="carre">
            <div class="carre1">
                <img src="images/garde.jpeg" alt="" width="758">
            </div>
            <div class="carre2"><h2>Découvrez Nos Différents Saveurs !!</h2></div>
            <div id="carre3"><h3>LET'S GOOOO !</h3></div>
        </div>
        <div class="ecran">
            <img src="/images/ecran.png" alt="avis">
        </div>
    </section>

    <footer>
        <small>Copyright © 2023 Bubblemytea.com. Tous droits réservés.</small>
    </footer>
</body>
</html>