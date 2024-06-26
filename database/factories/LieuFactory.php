<?php

namespace Database\Factories;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lieu>
 */
class LieuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nom' => faker()->firstname ,
            'adresse' => faker()->streetAddress() ,
            'ville' => faker()->city() ,
            'pays' => faker()->country() ,
            'localisation' => faker()->localCoordinates() ,
        ];
    }
}
