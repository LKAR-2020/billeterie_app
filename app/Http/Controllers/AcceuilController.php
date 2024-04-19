<?php

namespace App\Http\Controllers;

use App\Models\Lieu;
use App\Models\Artiste;
use App\Models\Concert;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AcceuilController extends Controller
{
   // Dans le contrôleur de la page d'accueil
public function index()
{
    $artistes = Artiste::all();
    $concerts = Concert::with('lieu', 'artistes')->get();
    $lieus = Lieu::all();
    $users = User::all();
    $now = Carbon::now();

    $concertsEnCours = Concert::where('date', '<=', $now)
                            //   ->where('date_fin', '>=', $now)
                              ->get();

    $concertsAVenir = Concert::where('date', '>', $now)->get();

    $concertsPasses = Concert::where('date', '<', $now)->get();

    // dd($users);
    // return view('Acceuil', compact('users'));

    return view('Acceuil', compact('artistes', 'concerts', 'lieus','concertsEnCours', 'concertsAVenir', 'concertsPasses'));
}

}
