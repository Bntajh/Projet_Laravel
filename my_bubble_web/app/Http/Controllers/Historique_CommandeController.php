<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Historique_CommandeController extends Controller
{
    public function show(){
        return view ('Historique_Commande');
    }
}
