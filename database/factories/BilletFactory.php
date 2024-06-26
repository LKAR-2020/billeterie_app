<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Billet>
 */
class BilletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categorie' => faker()->randomElement(['Perso', 'Vip', 'VVip']) ,
            'prix' => faker()->randomElement(['2000', '5000', '10000']) ,
            'qr_code' => faker()-> ,
        ];
    }
}
