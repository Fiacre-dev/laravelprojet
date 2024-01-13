<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function index(Request $request)
    {

        // dd($request->name);

        // $keys = ["nb_de_place", "date_debut", "date_fin"];

        // $url = $request->url();
        // $newUrl = $request->fullUrl();

        // $str = "?";

        // foreach ($keys as  $param) {
        //     $requestValue = $request->input($param);
        //     if (!is_null($requestValue)) {
        //         $str .= "$param=$requestValue?";
        //     }
        // }
        // dd($newUrl, $url . urlencode($str), $newUrl !== $url . urlencode($str));
        // if ($newUrl !== $url . urlencode($str)) {
        //     return redirect($url);
        // }

        $requestArray = [];

        $nombre_de_places = $request->input("nb_de_place");

        $places = filter_var($nombre_de_places, FILTER_VALIDATE_INT);


        if ($nombre_de_places && $places) {
            $requestArray[] = ["nombre_places", ">=", $nombre_de_places];
        }

        $filtresOptions = [
            "type_transmission" => "transmission",
            "type_carburant" => "carburant",
        ];

        foreach ($filtresOptions as $key => $value) {
            if ($request->input($key)) {
                $requestArray[] = [$value, "=", $request->input($key)];
            }
        }

        $date_debut = $request->input("date_debut");

        // dd((new DateTime($date_debut))->add(new \DateInterval("P1D")));

        /**
         * @var \Illuminate\Database\Eloquent\Builder
         */
        $vehicules = Vehicule::where($requestArray)->addSelect([
            "nombre_reservations" =>  DB::table("reservations")->where("date_fin", '>=', (new DateTime($date_debut))->add(new \DateInterval("P1D")))->whereColumn("vehicule_id", '=', "vehicules.id")->selectRaw("count(id)"),
            "nombre_disponible" =>  DB::table("reservations")->where("date_fin", '>=', (new DateTime($date_debut))->add(new \DateInterval("P1D")))->whereColumn("vehicule_id", '=', "vehicules.id")->selectRaw("nombre - count(id)"),
        ])->where("nombre", ">=", "nombre_reservations");

        // $vehicules->selectSub("nombre - id", "nombre_disponible");


        $tris_possibles = [
            "places" => "nombre_places",
            "prix" => "prix_location",
            "nom_voiture" => "nom",
            "nombre" => "nombre_disponible"
        ];

        foreach ($tris_possibles as $key => $value) {
            if ($request->input("motif_tri") == $key) {
                $vehicules->orderBy($value);
                break;
            }
            //  elseif ($request->input("motif_tri") == "nombre_disponible") {
            //     $vehicules = $vehicules->get()->sortBy(function ($val) {
            //         return $val->nombre - $val->nombre_reservations;
            //     });
            //     break;
            // }
        }

        // if ($request->input("motif_tri") == "nombre") {
        //     $vehicules = $vehicules->get()->sortBy(function ($val) {
        //         return $val->nombre - $val->nombre_reservations;
        //     });
        // } else {
        //     $vehicules = $vehicules->get();
        // }

        // dd($vehicules->paginate(20));



        // foreach ($v as $key => $value) {
        //     dump($value->id);
        // }

        // dd();
        // dd($vehicules = $vehicules->get());

        return view("catalogue", [
            "vehicules" => $vehicules->paginate(20)->withQueryString()
        ]);
    }
}