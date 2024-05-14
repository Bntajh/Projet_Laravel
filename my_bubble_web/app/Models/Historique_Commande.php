<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique_Commande extends Model
{
    use HasFactory;

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'id_commande');
    }
}
