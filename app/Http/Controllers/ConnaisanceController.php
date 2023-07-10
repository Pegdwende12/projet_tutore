<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\matiere;
use  App\Models\connaissance;

class ConnaisanceController extends Controller
{
    //
    public function create()
{
    $etudiant = auth()->user(); // ou toute autre méthode pour obtenir l'étudiant connecté
    $matieres = matiere::all();
    return view('connaisance', compact('etudiant', 'matieres'));
}

public function store(Request $request)
{
    // Validez les données du formulaire
    $request->validate([
        'id_etudiant' => 'required|exists:etudiants,id',
        'titre_connaiss' => 'required|string',
        'id_matiere' => 'required|exists:matieres,id',
    ]);

    // Créez une nouvelle instance de Connaisance avec les données du formulaire
    $connaisance = new connaissance();
    $connaisance->titre_connaiss = $request->titre_connaiss;
    $connaisance->id_matiere = $request->id_matiere;
    $connaisance->save();

    // Attachez l'étudiant à la connaissance avec la méthode attach
    $connaisance->etudiants()->attach($request->id_etudiant);

    // Redirigez vers une autre page avec un message de succès
    return redirect()->route('/')->with('success', 'Connaissance enregistrée avec succès !');
}


}
