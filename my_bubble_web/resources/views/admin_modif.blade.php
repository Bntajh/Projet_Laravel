<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

</head>
<body>
    


    <center><h1>Modifier Produits</h1> </center>



    <!-- content -->
    <form method="post" action="/admin_modif/traitement" enctype="multipart/form-data">
    @csrf

    <input type="text" name="id" style="display: none;" value="{{$produits->id}}">

    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{$produits->nom}}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" name="description" value="{{$produits->description}}">
    </div>
    <div class="form-group">
        <label for="prix">Prix:</label>
        <input type="decimal" class="form-control" id="prix" name="prix" value="{{$produits->prix}}">
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="decimal" class="form-control" id="stock" name="stock" value="{{$produits->stock}}">
    </div>
     <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image" value="{{$produits->image}}"    >
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>

    <div class="return">
        <a href="/admin">Révenir à la liste de Produits</a>
    </div>
</form>

    @if(session('status'))
        <a href="#">{{session('status')}}</a>
    @endif

    @if ($errors->any())
    <div>
        <strong>Erreur de validation :</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


</body>
</html>