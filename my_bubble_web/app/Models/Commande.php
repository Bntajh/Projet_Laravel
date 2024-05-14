<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandes extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function detailsCommande()
    {
        return $this->hasMany(DetailsCommande::class, 'id_commande');
    }

    public function historiqueCommande()
    {
        return $this->hasOne(HistoriqueCommande::class, 'id_commande');
    }
}
