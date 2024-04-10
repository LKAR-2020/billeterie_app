<?php

namespace Database\Seeders;

use App\Models\Artiste;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            Artiste::create([
                'nom' => 'Artiste '.$i,
                'genre_musical' => 'Genre '.$i,
            ]);
        }
    }
}
