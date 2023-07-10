<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;

class InscriptionController extends Controller
{
    //
    public function showForm() {

        return view('inscription');
    }

    public function register(Request $request) {
        // Valider les données du formulaire
        $request->validate([
          'email_etudiant' => 'required|email|unique:etudiants,email_etudiant',
          'password' => 'required|confirmed|min:8',
        ]);
      
        // Créer un nouvel utilisateur
        $etudiant = new Etudiant();
        $etudiant->email_etudiant = $request->email_etudiant;
        $etudiant->nom_etudiant = $request->nom_etudiant;
        $etudiant->prenom_etudiant = $request->prenom_etudiant;
        $etudiant->password = Hash::make($request->password);
        $etudiant->save();
      
        // Connecter l'utilisateur
        Auth::login($etudiant);
      
        // Rediriger vers la page d'accueil
        return redirect('/espacepublic');
      }
      

}
