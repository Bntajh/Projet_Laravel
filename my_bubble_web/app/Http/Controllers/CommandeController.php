<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CommandeController extends Controller
{
    public function show(){
        $produit = Produit::all();
        
        return view ('commande',compact('produit'));
    }
}
