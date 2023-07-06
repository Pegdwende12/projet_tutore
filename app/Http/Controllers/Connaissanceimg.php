<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connaissance;
use Illuminate\Support\Facades\DB;


class Connaissanceimg extends Controller
{
    public function  view($id)
    {
        // Récupérer toutes les connaissances avec leurs relations

    /* $connaissances = Connaissance::with(['etudiants','matiere','publications','appreciation'])
     ->join('appreciations','id_connaissance', '=','appreciations.id_connaissance')
     ->select('connaissances.*',DB::raw('count(appreciations.like) as likes'))
     ->groupBy('id_connaissance')
     ->orderBy('likes','desc')
     ->get();*/

      // Trouver la connaissance par son id
      $connaissance= Connaissance::findOrFail($id);

      // Incrémenter le nombre de vues
      $connaissance->nbr_vues++;

      // Enregistrer le changement dans la base de données
      $connaissance->save();

      // Rediriger vers la vue qui affiche la connaissance
      //return redirect('/connaissances/'.$id);

     return view('espacepublic/'.$id);
    }

   
    public function index(){

        $connaissances = Connaissance::with(['etudiants','matiere','publications'])->get();
        return view('espacepublic', compact('connaissances'));
    }

     
}
