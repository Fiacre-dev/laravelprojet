<?php

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
Route::view("login", "auth.login")->name("login");
Route::view("register", "auth.register")->name("register");
Route::view("catalogue", "catalogue")->name("catalogue");
Route::view("paiement", "paiement")->name("paiement");
