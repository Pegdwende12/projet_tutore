<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connaissance;

class Connaissanceimg extends Controller
{
    public function index()
    {
        // Récupérer toutes les connaissances avec leurs relations

     $connaissances = Connaissance::with(['etudiants','matieres','publications'])
     
     ->get();

     return view('espacepublic.index', compact('connaissances'));
    }
     
}
