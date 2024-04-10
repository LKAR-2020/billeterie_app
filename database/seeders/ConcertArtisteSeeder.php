<?php

namespace Database\Seeders;

use App\Models\Artiste;
use App\Models\Concert;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConcertArtisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $concerts = Concert::all();
        $artistes = Artiste::all();

        foreach ($concerts as $concert)
        {
            // Sélectionnez aléatoirement 2 artistes pour chaque concert
            $selectedArtistes = $artistes->random(2);

            // Associez les artistes sélectionnés au concert
            foreach ($selectedArtistes as $artiste)
            {
                $concert->artistes()->attach($artiste);
            }
        }
    }
}
