<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
 
</head>
<body>
    <header class= "header">
        <div class="container">
            <a href='/HomePage'>  
                    <img src="images/logo.png" alt="" width="300"/> 
                </a>  
            <nav>
                <ul>
                    <li><a href="/login">LOGIN</a></li>
                    <li><a href="/commande">SHOP</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                    <li><a href="/Panier">BASKET</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <center><div id="after_submit"></div><br><br><br><br><br><br>
<form id="contact_form"enctype="multipart/form-data">
  <div class="row">
    <label class="required" for="name">Your name:</label><br />
    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
    <span id="name_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="email">Your email:</label><br />
    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    <span id="email_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="message">Your message:</label><br />
    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
    <span id="message_validation" class="error_message"></span>
  </div>
    
    <a href="/HomePage"><input id="submit_button" type="submit" value="Send email" /></a></center>
</form>
</body>
</html>
