<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artiste>
 */
class ArtisteFactory extends Factory
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
        'photo' => fake()->imageUrl(200, 200, 'people'),
        'nom' => fake()->lastName,
        'prenom' => fake()->firstName,
        'blaze' => fake()->unique()->userName,
        'genre_musical' => fake()->randomElement(['Rock', 'Pop', 'Hip-Hop', 'Jazz', 'R&B']),
        ];
    }
}
