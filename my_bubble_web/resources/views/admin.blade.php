<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Bievenue Sur la Page Admin</h1>
    <div class="text-center">
            <div class="row">
                <div class="col s12">        
                    <a href="admin_ajout"><button type="button">Ajout produit</button></a>
                    <hr>
                            
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nom</th>
                                <th>description</th>
                                <th>prix</th>
                                <th>stock</th>
                                <th>action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $ide = 1;
                            @endphp

                            @foreach($produits as $produit)
                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $produit->nom }}</td>
                                <td>{{ $produit->description }}</td>
                                <td>{{ $produit->prix }}</td>
                                <td>{{ $produit->stock }}</td>
                                <td>
                                    <a href="admin_modif/{{ $produit->id }}"><button type="button">Modif</button></a>
                                    <a href="admin_supp/{{ $produit->id }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                                        <button type="button">Supp</button>
                                    </a>                                      
                                </td>
                            </tr>

                            @php
                                $ide += 1; 
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
            </div>
            </div>
    </div>
        @if(session('status'))
            <a href="#">{{session('status')}}</a>
        @endif
</body>
</html>