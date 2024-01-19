<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VehiculeController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/vehicule/{vehicule}", [VehiculeController::class, "show"])->missing(function () {
    return response()->json([
        "data" => null,
        "success" => false
    ]);
});

Route::get("client/{user}", function (User $user) {
    $user->loadCount(["reservations", "reservationsEnCours"]);
    return response()->json([
        "data" => $user,
        "success" => true
    ]);
})->missing(function () {
    return response()->json([
        "data" => null,
        "success" => false
    ]);
});
