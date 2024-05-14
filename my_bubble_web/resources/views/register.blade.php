<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
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
               

    <li><a href="/commande">SHOP</a></li>
    <li><a href="/contact">CONTACT</a></li>
    <li><a href="/Panier">BASKET</a></li>
</ul>

            </nav>
        </div>
    </header>

    <section class="section">
        <div id="rectangle" class="flex-container">
    
            <div class="img">
                <img src="images/bubble_tapioca.jpeg" alt="">
            </div>
    
            <div class="grille">
                <form method="post" action="/register/traitement">

                    @csrf
    
                    <h2>Login Here</h2>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom">
                    <input type="text" id="name" name="name" placeholder="Nom">
                    <input type="text" id="email" name="email" placeholder="Email">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <input type="text" id="adresse" name="adresse" placeholder="Adresse">
                    <input type="text" id="tel" name="tel" placeholder="N° téléphone">
                
                <center><button style="cursor:pointer" type="submit" class="btn btn-primary">SIGN IN</button></center>
                    </form>
                    @if(session('status'))
    <div>{{ session('status') }}</div>
@endif 
                   

            </div>
            
        </div>
    </section>

    

  
</body>
</html>