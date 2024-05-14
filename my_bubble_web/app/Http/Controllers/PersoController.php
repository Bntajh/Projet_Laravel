<?php

namespace App\Http\Controllers;

use App\Models\Produit;

use Illuminate\Http\Request;

class PersoController extends Controller
{
    public function show()
    {
        $produits = Produit::all();
        return view('perso', compact('produits'));    
    }
 
    public function modifPerso(Request $request,$id)
    {
        $produit = Produit::find($id);
        return view('perso', compact('produit'));   
       
    }






public function  modifPerso_traitement(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'description' => 'required',
        'prix' => 'required|numeric',
      
    ]);

    $produit = new Produit();
    $produit->nom = $request->input('nom');
    $produit->description = $request->input('description');
    $produit->prix = $request->input('prix');


    $produit->update();


}
}