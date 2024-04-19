<?php

namespace App\Http\Controllers;

use App\Models\Lieu;
use Illuminate\Http\Request;

class LieusController extends Controller
{
    /**
     * Affiche la liste des lieus.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $lieus = Lieu::all();
        dd($lieus);
        return view('lieus', compact('lieus'));
    }

    /**
     * Affiche le formulaire de création d'un nouveau lieu.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('lieus.create');
    }

    /**
     * Enregistre un nouveau lieu dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Lieu::create($request->all());
        return redirect()->route('lieus.index')->with('success', 'Lieu créé avec succès.');
    }

    /**
     * Affiche les détails d'un lieu spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $lieu = Lieu::findOrFail($id);
        return view('lieus.show', compact('lieu'));
    }

}
