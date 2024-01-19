<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function home()
    {
        /**
         * @var \Illuminate\Pagination\LengthAwarePaginator
         */
        $vehicules =  Vehicule::addSelect([
            "nombre_reservations" =>  DB::table("reservations")->where("date_fin", '>=', (new DateTime())->add(new \DateInterval("P1D")))->whereColumn("vehicule_id", '=', "vehicules.id")->selectRaw("count(id)"),
            "nombre_disponible" =>  DB::table("reservations")->where("date_fin", '>=', (new DateTime())->add(new \DateInterval("P1D")))->whereColumn("vehicule_id", '=', "vehicules.id")->selectRaw("nombre - count(id)"),
        ])->where("nombre", ">=", "nombre_reservations")->select(["id", "nom", "nombre_places", "transmission", "carburant", "prix_location", "annee"])->paginate(20);


        return view("acceuil", compact("vehicules"));
    }
}
