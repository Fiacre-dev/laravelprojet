<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        "vehicule_id",
        "user_id",
        "ville_id",
        'date_debut',
        'date_fin',
        "paye",
        "montant"
    ];
    protected $casts = [
        'date_debut' => 'datetime',
        'date_fin' => 'datetime',
    ];

    public $timestamps = false;

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function livraison()
    {
        return $this->hasOne(Livraison::class);
    }
}
