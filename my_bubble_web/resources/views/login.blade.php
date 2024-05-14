<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="{{ asset('css/style_login_register.css')}}">
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
                <img src="images/bubble_rouge.jpeg" alt="">
            </div>
    
            <div class="grille">
                <form action="login/traitement" method="POST">
                    @csrf
    
                    <h2>Login Here</h2>
                    <input type="text" id="email" name="email" placeholder="Email" required><br>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <center><button type="submit">CONNEXION</button></center>
                    <center><p>---------- OR ----------</p></center>
                </form>
                <center><a href="/register"><button type="submit">SIGN IN</button></a></center>
                @if(session('status'))
        <a href="#">{{session('status')}}</a>
    @endif 
            </div>
        </div>
    </section>
    


</body>
</html>