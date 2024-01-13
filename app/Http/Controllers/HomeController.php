<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        /**
         * @var \Illuminate\Pagination\LengthAwarePaginator
         */
        $vehicules = Vehicule::select(["id", "nom", "nombre_places", "transmission", "carburant", "prix_location", "annee"])->paginate(20);
        return view("acceuil", compact("vehicules"));
    }
}