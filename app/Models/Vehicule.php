<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "annee",
        "prix_location",
        "nombre_places",
        "quotion",
        "transmission",
        "carburant",
        "prix_chauffeur",
        "prix_siege_enfant",
        "nombre"
    ];

    public $timestamps = false;

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
