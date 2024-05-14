<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details_commande', function (Blueprint $table) {
            $table->id();
            $table->integer('id_commande')->unsigned();
            $table->integer('id_produit')->unsigned();
            $table->integer('quantite');
            $table->decimal('prix_unitaire');
            $table->decimal('taux_sucres');
            $table->string('poppings');
            $table->timestamps();

            $table->foreign('id_commande')->references('id_commande')->on('commandes');
            $table->foreign('id_produit')->references('id_produit')->on('produits');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_commande');
    }
};
