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
    Schema::create('historique_commande', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_commande'); 
        $table->string('statut');
        $table->timestamp('date_modification')->nullable();
        $table->timestamps();

        $table->foreign('id_commande')->references('id')->on('commandes');
    });
}

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historique_commande');
    }
};
