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
                <a href='/HomePage'>  
                    <img src="images/logo.png" alt="" width="300"/> 
                </a>  
            </div>
            <nav>
            <ul>
    @if(session('status'))
        <a href="#">{{session('status')}}</a>
    @endif
    <li><a href="/login">LOGIN</a></li>
    <li><a href="/commande">SHOP</a></li>
    <li><a href="/contact">CONTACT</a></li>
    <li><a href="/Panier">BASKET</a></li>
    <li><a href="/profil">PROFIL</a></li>
    <li><a href="/deconnexion">DECONNEXION</a></li>

</ul>

            </nav>
        </div>
    </header>
    

    <section>
        <div class="carre">
            <div class="carre1">
                <img src="images/garde.jpeg" alt="" width="758">
            </div>
            <div class="carre2"><h2>Discover our different flavours !!</h2></div>
            <div id="carre3"><h3>LET'S GOOOO !</h3></div>
        </div>
    </section>
    
</body>
</html>
