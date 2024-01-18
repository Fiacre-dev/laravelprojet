<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class AdminCOntroller extends Controller
{
    public function listeVehicule()
    {
        return view("liste-vehicule", ["vehicules" => Vehicule::all()]);
    }
    public function deleteVehicule(Vehicule $vehicule)
    {
        if ($vehicule->reservations()->where('paye', 1)->where("date_fin", ">=", now())->count() != 0) {
            session()->flash("error", "Vous ne pouvez pas supprimé ce véhicule");
        } else {
            $vehicule->delete();
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

    // public function getVehicule($id){
    //     $vehicule =
    // }
}
