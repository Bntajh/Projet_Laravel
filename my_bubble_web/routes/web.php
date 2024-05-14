<?php
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Historique_CommandeController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'show']);
Route::get('/HomePage', [HomePageController::class, 'show']);

Route::get('/login',[UserController::class, 'form_login']);
Route::get('/register',[UserController::class, 'form_register']);

Route::get('/Panier',[PanierController::class,'show']);
Route::get('/Historique_Commande',[Historique_CommandeController::class,'show']);

Route::get('/commande',[CommandeController::class,'show']);

Route::get('/profil',[ProfilController::class,'show']);

Route::get('/user_modif/{id}', [ProfilController::class,'modif']);
Route::post('/user_modif/traitement{id}', [ProfilController::class, 'user_modif_traitement'])->name('user_modif_traitement');






Route::get('/produit',[ProduitController::class,'show']);

Route::get('/admin_ajout',[AdminController::class,'ajout']);
Route::get('/admin',[AdminController::class,'show']);
Route::get('/admin_modif/{id}',[AdminController::class,'modif']);
Route::get('/admin_supp/{produit}',[AdminController::class,'supp']);

Route::post('/login/traitement',[UserController::class, 'traitement_login']);
Route::post('/admin_modif/traitement',[AdminController::class, 'admin_modif_traitement']);
Route::post('/register/traitement',[UserController::class, 'traitement_register']);
Route::post('/admin/produit',[AdminController::class, 'produit_admin']);

Route::get('/connexion',function(){
    return view('connexion');
});
Route::get('/contact',function(){
    return view('contact');
});

Route::get('/deconnexion',[UserController::class,'deconnexion']); 
Route::get('/perso/{id}', [PersoController::class, 'modifPerso'])->name('modif_perso');
Route::get('/perso', [PersoController::class, 'show']);
Route::post('/perso/traitement',[PersoController::class, 'modifPerso_traitement']);




