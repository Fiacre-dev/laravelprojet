<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        "vehicule_id",
        "vuser_id",
        "ville_id",
        'date_debut',
        'date_fin'
    ];
    protected $casts = [
        'date_debut' => 'datetime',
        'date_fin' => 'datetime',
    ];

    public $timestamps = false;
}
