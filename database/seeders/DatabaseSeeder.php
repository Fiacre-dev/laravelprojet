<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Reservation;
use App\Models\Vehicule;
use App\Models\Ville;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * @var \Illuminate\Database\Eloquent\Collection
         */
        $villes = Ville::factory(20)->create();
        $vehicules = Vehicule::factory(50)->create();
        \App\Models\User::factory(50)->create()->each(function ($user) use ($villes, $vehicules) {
            Reservation::factory(random_int(0, 10))->create([
                "user_id" => $user->id,
                "ville_id" => $villes->random(1)->first()->id,
                "vehicule_id" => $vehicules->random(1)->first()->id
            ]);
        });


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
