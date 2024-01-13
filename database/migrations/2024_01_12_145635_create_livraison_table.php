<?php

use App\Models\Reservation;
use App\Models\Ville;
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
        Schema::create('livraison', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Reservation::class);
            $table->string("nom");
            $table->string("prenom");
            $table->string("telephone");
            $table->foreignIdFor(Ville::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraison');
    }
};