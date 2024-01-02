<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicule>
 */
class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->company(),
            "annee" => $this->faker->year,
            "prix_location" => $this->faker->numberBetween(),
            "nombre_places" => $this->faker->numberBetween(4, 12),
            "quotion" => $this->faker->numberBetween(10000, 25000),
            "transmission" => $this->faker->randomElement(["Automatique", "Manuel"]),
            "carburant" => $this->faker->randomElement(["Essence", "Gasoil"]),
            "prix_chauffeur" => $this->faker->numberBetween(15000, 20000),
            "prix_siege_enfant" => $this->faker->numberBetween(4000, 10000),
            "nombre" => $this->faker->numberBetween(15, 150)
        ];
    }
}
