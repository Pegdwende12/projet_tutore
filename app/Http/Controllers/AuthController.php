<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;


class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    // Vérifier les informations de connexion et connecter l'utilisateur
    public function login(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email_etudiant' => 'required|email',
            'password' => 'required',
        ]);

        // Tenter de se connecter avec les identifiants fournis
        if (Auth::attempt(['email_etudiant' => $request->email_etudiant, 'password' => $request->password])) {
            // Si la connexion réussit, rediriger vers la page d'accueil
            return redirect()->intended('/');
        } else {
            // Si la connexion échoue, renvoyer vers le formulaire avec un message d'erreur
            return back()->withErrors(['email' => 'Email ou mot de passe incorrect']);
        }
    }



}
