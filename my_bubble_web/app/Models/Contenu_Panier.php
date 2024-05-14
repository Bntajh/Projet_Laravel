<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu_Panier extends Model
{
    use HasFactory;

    public function panier()
    {
        return $this->belongsTo(Panier::class, 'id_panier');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }
}
