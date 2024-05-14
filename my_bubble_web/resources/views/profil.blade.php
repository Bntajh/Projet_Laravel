<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/profil.css')}}">
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

<div class=profil>
  
<div class=profil1><img src="/images/female.png" alt="logo">

</div>
<h1 class=nom> {{session('user')->prenom}}</h1><br><br>
    
   <a href="/user_modif/{{ session('user')->id }}"><button class="button">Infos</button></a><br><br>



   <a href=""> <button class=button1>Orders</button></a><br><br>
   <a href=""> <button class=button2>Orders in progress</button></a><br>
  

</div>

</body>
</html> 
@if(session('status'))
        <a href="#">{{session('status')}}</a>
    @endif 