<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function form_register(Request $request){
         if($request->session()->get('user')){
            return redirect('/connexion')->with('status','Veuillez vous déconnecter en premier lieu !');
        }
        else{
            return view('register');
        }
    }
    public function form_login(Request $request){
        if($request->session()->get('user')){
            return redirect('/connexion')->with('status','Vous êtes déjà connecté !');
        }
        else{
            return view('login');
        }

        
    }
    public function traitement_register(Request $request ){
        $request->validate([
            'name' => 'required',
            'email'=> 'email|required|unique:users',
            'prenom' => 'required',
            'password' =>'required|min:8',
            'adresse' =>'required',
            'tel' =>'required'
            
        ]);
        
        $user = new User();
        $user->name=$request->input('name');
        $user->prenom=$request->input('prenom');
        $user->email=$request->input('email');
        $user->password= bcrypt($request->input('password'));
        $user->adresse=$request->input('adresse');
        $user->tel=$request->input('tel');
        $user->save();

        return redirect('/login')->with('status','Votre compte à été crée avec succès !');
    }
    public function traitement_login(Request $request ){
        $request->validate([
            'email'=> 'email|required',
             'password' =>'required|min:8',
        ]);
        $user = User::where('email', $request->input('email'))->first();
        if($user){
            if(Hash::check($request->input('password'),$user->password)){
                $request->session()->put('user',$user);
                return redirect('/connexion');

            }else{
                return back()->with('status','identifiant ou mot de passe invalide !');
            }

        }else{
            return back()->with('status','Désolé! vous n\'avez pas de compte avec cet email.');
        }
         

        
    }
    public function deconnexion(Request $request ){
        $request->session()-> forget('user');
        return redirect('/login')->with('status','Vous venez de vous déconnecter !');

    }
    

    
}
