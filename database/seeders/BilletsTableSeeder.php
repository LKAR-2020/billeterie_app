<?php

namespace Database\Seeders;

use App\Models\Billet;
use App\Models\Concert;
use App\Models\User;
use BaconQrCode\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\GDLibRenderer;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BilletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupérez tous les concerts
        $concerts = Concert::all();
       // $clients = User::all();

        foreach ($concerts as $concert) {
            // Générer 10 billets pour chaque concert
            for ($i = 1; $i <= 10; $i++) {
                 // Générer le contenu du QR code (par exemple, l'ID du billet)
                 $qrContent = $concert->id . '-' . $i;
                //$client = $clients->random(2);

                // Générer le QR code
                $qrCode = QrCode::size(400)->generate($qrContent);

                // Enregistrer le QR code dans le répertoire de stockage
                $qrImagePath = 'qrcodes/' . $qrContent . '.svg';
                Storage::disk('qrcodes')->put($qrImagePath, $qrCode);

                // Créer le billet avec le chemin de l'image QR code
                Billet::create([
                    'concert_id' => $concert->id,
                    'user_id' => mt_rand(1, 11),
                    'prix' => mt_rand(20, 100), // Prix aléatoire entre 20 et 100
                    'qr_code' => $qrImagePath, // Chemin de l'image QR code
                ]);
            }
        }
    }
}
