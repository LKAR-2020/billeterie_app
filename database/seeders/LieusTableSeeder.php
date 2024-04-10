<?php

namespace Database\Seeders;

use App\Models\Lieu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LieusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lieu::create([
            'nom' => 'Salle de concert A',
            'adresse' => '123 Rue de la Musique',
            'ville' => 'Paris',
            'pays' => 'France',
        ]);

        Lieu::create([
            'nom' => 'Salle de concert B',
            'adresse' => '456 Avenue des Artistes',
            'ville' => 'Lyon',
            'pays' => 'France',
        ]);
    }
}
