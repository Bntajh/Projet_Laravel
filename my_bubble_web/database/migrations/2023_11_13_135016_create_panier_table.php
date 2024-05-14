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
    Schema::create('panier', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_user'); 
        $table->timestamp('date_creation')->nullable();
        $table->foreign('id_user')->references('id')->on('users');
        $table->timestamps();
    });
}
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panier');
    }
};
