<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        $produits = Produit::all();
        return view('admin', compact('produits'));
    }

    public function ajout()
    {
        return view('admin_ajout');
    }

    public function modif($id){
        $produits = Produit::find($id);
        return view ('admin_modif', compact('produits'));
    }

    public function supp($id){
        $produits = Produit::find($id);
        $produits->delete();
        // return view ('admin_supp');
        return redirect('/admin')->with('status', 'Le produit a été supprimé avec succès !');

    }



    public function produit_admin(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $produit = new Produit();
        $produit->nom = $request->input('nom');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->stock = $request->input('stock');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images',$imageName);
            $produit->image ='images/' .$imageName;
        } else {
            return redirect('/admin_ajout')->withErrors(['image' => 'Invalid image file']);
        }

        $produit->save();

        return redirect('/admin_ajout')->with('status', 'Nouveau Produit ajouté avec succès !');
    }

    public function admin_modif_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $produit = Produit::find($request->id);
        $produit->nom = $request->input('nom');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->stock = $request->input('stock');
        $produit->update();
        $produits = Produit::all();

        return redirect('/admin')->with('status', 'Produit modifié avec succès !');

    }
}


