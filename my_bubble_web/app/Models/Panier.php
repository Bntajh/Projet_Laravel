<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function contenu_panier()
    {
        return $this->hasMany(ContenuPanier::class, 'id_panier');
    }
}
