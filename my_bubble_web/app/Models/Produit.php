<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    public function detailsCommande()
    {
        return $this->hasMany(DetailsCommande::class, 'id_produit');
    }

    public function contenuPanier()
    {
        return $this->hasMany(ContenuPanier::class, 'id_produit');
    }
}
