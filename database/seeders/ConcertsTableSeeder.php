<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Concert;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConcertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Date de départ pour les concerts (aujourd'hui)
         $date = Carbon::now();

         for ($i = 0; $i < 10; $i++) {
             // Ajoutez une semaine à la date pour chaque concert
             $date->addWeek();

             Concert::create([
                 'nom' => 'Concert '.$i,
                 'date' => $date->format('Y-m-d H:i:s'),
                 'lieu_id' => rand(1, 2), // Sélectionne aléatoirement un lieu parmi les 5 lieux
                 'prix' => rand(10, 50), // Prix aléatoire entre 10 et 50
             ]);
         }
    }
}
