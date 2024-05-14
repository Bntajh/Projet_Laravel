<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function show(){
        return view('profil');
    }

    public function modif($id)
    {
        $user = User::find($id);
        
        return view('user_modif',compact('user'));
    }   
    
    
    public function user_modif_traitement(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|email', 
            'adresse' => 'required',
            'tel' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');   
        $user->adresse = $request->input('adresse');
        $user->tel = $request->input('tel');
        $user->update();
        return redirect('/profil')->with('status', 'L\'utilisateur a été modifié avec succès !');
    }


    
}



