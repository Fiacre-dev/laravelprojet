<?php

use App\Http\Controllers\AdminCOntroller;
use App\Models\Ville;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\PresentationVoitureController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::middleware(["guest"])->group(function () {
    Route::get("login", [AuthController::class, "login"])->name("login");
    Route::post("login", [AuthController::class, "handleLogin"])->name("handleLogin");


    Route::get("register", [AuthController::class, "register"])->name("register");
    Route::post("register", [AuthController::class, "handleRegistation"])->name("handleRegistation");
});
Route::middleware("auth")->group(function () {
    Route::post("logout", [AuthController::class, "logout"])->name("logout");
    Route::get("logout", [AuthController::class, "logout"])->name("logout");
    Route::get("history",function(){
        return view("historique", ["reservations" => auth()->user()->reservations()->with("vehicule")->get()]);
    })->name("history");

    Route::middleware("admin")->group(function () {
        Route::get("liste-vehicules", [AdminCOntroller::class, "listeVehicule"])->name("liste_vehicule");
        Route::post("store/vehicule", [AdminCOntroller::class, "storeVehicule"])->name("vehicule.store");
        Route::post("edit/vehicule/{vehicule}", [AdminCOntroller::class, "editVehicule"])->name("vehicule.edit");
        Route::delete("delete/vehicule/{vehicule}", [AdminCOntroller::class, "deleteVehicule"])->name("vehicule.delete");


        Route::get("liste-clients", [AdminCOntroller::class, "listeClients"])->name("liste_clients");


        Route::get("gerer-reservation", [AdminCOntroller::class, "listeReservations"])->name("gerer_reservation");
        Route::put("render/reservation/{reservation}", [AdminCOntroller::class, "renderReservation"])->name("render_reservation");
    });


    Route::post("/save/reservation/paiement", [PresentationVoitureController::class, "save"])->name("save_reservation");
    Route::get("paiement/{reservation:id}", function (Reservation $reservation) {
        if ($reservation->livraison) {
            session()->flash("error", "Vous avez déjà payé.");
            return to_route("acceuil");
        }
        $reservation->load("vehicule");
        return view("paiement", [
            "reservation" => $reservation,
            "villes" => Ville::all()
        ]);
    })->name("paiement")
        ->missing(function () {
            return to_route("acceuil");
        });;
    Route::post("paiement/{reservation:id}", function (Request $request, Reservation $reservation) {
        $reussi = DB::table("livraison")->insert([
            "reservation_id" => $reservation->id,
            "nom" => $request->input("nom"),
            "prenom" => $request->input("prenom"),
            "telephone" => $request->input("tel"),
            "ville_id" => $request->input("lieu"),
        ]);
        $reservation->paye = 1;
        $reservation->save();
        if ($reussi) {
            session()->flash("success", "Paiement réussi avec succès");
        } else {
            session()->flash("error", "Une erreur est survenue");
        }
        return to_route("acceuil");
    })->name("save.livraison")->missing(function () {
        return to_route("acceuil");
    });
});

Route::get('/', [HomeController::class, "home"])->name("acceuil");
Route::view("contact", "contact")->name("contact");
Route::get("catalogue/{name?}", [CatalogueController::class, "index"])->name("catalogue");
// Route::view("paiement", "paiement")->name("paiement");
Route::get("presentation-voiture/{vehicule:id}", [PresentationVoitureController::class, "index"])->name("presentation_voiture")->missing(function () {
    return to_route("acceuil");
});
