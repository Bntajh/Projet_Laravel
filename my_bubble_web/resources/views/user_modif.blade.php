<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="{{ asset('css/modifUser.css')}}">
    
</head>
<body>
    <center><h2>Modifier votre profil</h2></center>
    

    <form method="post" action="{{ route('user_modif_traitement', ['id' => $user->id]) }}" enctype="multipart/form-data">
        @csrf
       
        
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        </div>
        
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$user->prenom}}">
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
        </div>
        
        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{$user->adresse}}">
        </div>
         
        <div class="form-group">
            <label for="tel">Tel:</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="{{$user->tel}}">
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="/profil" class="btn btn-cancel">Cancel</a>
        </div>
        
   
</body>
</html>