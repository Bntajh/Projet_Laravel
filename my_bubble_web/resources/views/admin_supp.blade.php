<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Suppression réussie</h2>
        <p>Le produit a été supprimé avec succès.</p>
        <a href="{{ url('/produit') }}">Retour à la liste des produits</a>
    </div>

    <div>
        <a href="{{ url('/produit') }}">Retour à la liste des produits</a>
    </div>

    @foreach($produits as $produit)
    <div>
        {{ $produit->id }}
        <form action="{{ url('/produit', $produit->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Supprimer</button>
        </form>
    </div>
@endforeach
</body>
</html>