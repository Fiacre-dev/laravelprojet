<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicule;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminCOntroller extends Controller
{
    public function listeVehicule()
    {
        return view("liste-vehicule", ["vehicules" => Vehicule::all()]);
    }
    public function deleteVehicule(Vehicule $vehicule)
    {
        if ($vehicule->reservations()->where("date_fin", ">=", now())->count() != 0) {
            session()->flash("error", "Vous ne pouvez pas supprimé ce véhicule parce qu'il est réservé actuellement");
        } else {
            DB::transaction(function () use ($vehicule) {
                $vehicule->livraisons()->delete();
                $vehicule->reservations()->delete();
                $vehicule->delete();
            });
            session()->flash("success", "Véhicule supprimé avec succès");
        }
        return to_route("liste_vehicule");
    }
    public function listeClients()
    {
        return view("liste-clients", ["clients" => User::where("is_admin", 0)->get()]);
    }
    public function listeReservations()
    {
        return view("gerer-reservation", ["reservations" => Reservation::where("status", 0)->with("vehicule")->get()]);
    }

    public function renderReservation(Reservation $reservation)
    {
        $reservation->status = 1;
        $reservation->save();
        session()->flash("success", "Réservation approuvée avec succès");
        return to_route("gerer_reservation");
    }

    public function editVehicule(Vehicule $vehicule, Request $request)
    {
        $vehicule->update([
            "nom" => $request->input("nomVehicule"),
            "prix_location" => $request->input("prixVehicule"),
            "quotion" => $request->input("quotionVehicule"),
            "prix_siege_enfant" => $request->input("place_enfantVehicule"),
            "prix_chauffeur" => $request->input("chauffeurVehicule"),
            "transmission" => $request->input("transmission"),
        ]);

        return back()->with("success", "Opération éffectuée avec succès");
    }

    public function storeVehicule(Request $request)
    {
        $rule =  "required|integer|gt:0";

        $validator = Validator::make($request->all(), [
            "nomVehicule" => "required|string|min:3",
            "prixNouveauVehicule" => $rule,
            "quotionNouveauVehicule" => $rule,
            "nombrePlacesNouveauVehicule" => $rule,
            "nombreNouveauVehicule" => $rule,
            "anneeNouveauVehicule" => $rule,
            "place_enfantNouveauVehicule" => $rule,
            "chauffeurNouveauVehicule" => $rule,
            "transmissionNouveauVehicule" => "required|in:Manuel,Automatique",
            "carburantNouveauVehicule" => "required|in:Essence,Gasoil"
        ]);

        if ($validator->passes()) {
            Vehicule::create([
                "nom" => $request->input("nomVehicule"),
                "annee" => $request->input("anneeNouveauVehicule"),
                "prix_location" => $request->input("prixNouveauVehicule"),
                "nombre_places" => $request->input("nombrePlacesNouveauVehicule"),
                "quotion" => $request->input("quotionNouveauVehicule"),
                "transmission" => $request->input("transmissionNouveauVehicule"),
                "carburant" => $request->input("carburantNouveauVehicule"),
                "prix_chauffeur" => $request->input("chauffeurNouveauVehicule"),
                "prix_siege_enfant" => $request->input("place_enfantNouveauVehicule"),
                "nombre" => $request->input("nombreNouveauVehicule")
            ]);
            session()->flash("success", "Véhicule enregistré avec succès");
            return back();
        } else {
            session()->flash("error", "Informations invalides");
            return back()->withErrors($validator);
        }
    }

    // public function getVehicule($id){
    //     $vehicule =
    // }
}