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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->year("annee");
            $table->integer('prix_location')->unsigned();
            $table->integer("nombre_places")->unsigned();
            $table->integer("quotion")->unsigned();
            $table->enum("transmission", ["Automatique", "Manuel"])->default("Manuel");
            $table->enum("carburant", ["Essence", "Gasoil"])->default("Essence");
            $table->integer("prix_chauffeur")->unsigned();
            $table->integer('prix_siege_enfant')->unsigned();
            $table->integer("nombre")->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
