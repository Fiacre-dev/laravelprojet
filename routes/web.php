<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view("acceuil");
})->name("acceuil");
Route::get("login", [AuthController::class, "login"])->name("login");
Route::post("login", [AuthController::class, "handleLogin"])->name("handleLogin");


Route::get("register", [AuthController::class, "register"])->name("register");
Route::post("register", [AuthController::class, "handleRegistation"])->name("handleRegistation");



Route::view("contact", "contact")->name("contact");
Route::view("catalogue", "catalogue")->name("catalogue");
Route::view("paiement", "paiement")->name("paiement");
Route::view("liste-vehicules", "liste-vehicule")->name("liste_vehicule");
Route::view("liste-clients", "liste-clients")->name("liste_client");
Route::view("gerer-reservation", "gerer-reservation")->name("gerer_reservation");
Route::view("presentation-voiture", "presentation-voiture")->name("presentation_voiture");
