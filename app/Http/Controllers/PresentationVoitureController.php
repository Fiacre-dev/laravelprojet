<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Vehicule;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresentationVoitureController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth")->only(["save"]);
    }
    public function index(Vehicule $vehicule)
    {
        $villes = Ville::orderBy("nom")->get();
        return view("presentation-voiture", compact("vehicule", "villes"));
    }

    public function save(Request  $request)
    {
        // if($request->avec_chauffeur)
        $request->validate([
            "lieu" => ["required", "exists:villes,id"],
            "date_debut" => ["required", "date"],
            "date_fin" => ["required", "date", "after:date_debut"],
            "vehicule" => ["required", "exists:vehicules,id"]
        ]);
        /**
         * @var Vehicule
         */
        $vehicule = Vehicule::find($request->vehicule);

        // $vehicule->prix_location += $vehicule->quotion;
        // dd($vehicule);
        if ($request->input("avec_chauffeur")) {
            $request->avec_chauffeur = 1;

            $vehicule->prix_location += $vehicule->prix_chauffeur;
        }
        if ($request->input("siege_enfant")) {
            $request->siege_enfant = 1;
            $vehicule->prix_location += $vehicule->prix_siege_enfant;
        }

        $params = [
            "vehicule_id" => $request->vehicule,
            "user_id" => auth()->id(),
            "ville_id" => $request->lieu,
            "date_debut" => $request->date_debut,
            "date_fin" => $request->date_fin,
            "montant" => $vehicule->prix_location
        ];


        $reservation = Reservation::create($params);

        return to_route("paiement", $reservation->id);


        // dd($request->all());
    }
}