<?php

namespace Database\Seeders;

use App\Models\Artiste;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 2; $i++) {
            $imageName = 'profile_artiste' . $i . '.png';
            $imageUrl = "https://picsum.photos/200/200?random=" . $i;

            Storage::disk('profil_artiste')->put('profil_artiste/' . $imageUrl, $imageUrl);

            Artiste::create([
                'photo' => $imageUrl,
                'nom' => 'Artiste '.$i,
                'genre_musical' => 'Genre '.$i,
                'prenom' => 'prenom_artiste'.$i,
                'blaze' => 'blaze_artiste'.$i,
            ]);
        }
    }
}
