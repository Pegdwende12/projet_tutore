<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connaissance;
use Illuminate\Support\Facades\DB;


class Connaissanceimg extends Controller
{
    public function index()
    {
        // Récupérer toutes les connaissances avec leurs relations

    /* $connaissances = Connaissance::with(['etudiants','matiere','publications','appreciation'])
     ->join('appreciations','id_connaissance', '=','appreciations.id_connaissance')
     ->select('connaissances.*',DB::raw('count(appreciations.like) as likes'))
     ->groupBy('id_connaissance')
     ->orderBy('likes','desc')
     ->get();*/
     $connaissances = Connaissance::with(['etudiants','matiere','publications'])->get();

     return view('espacepublic', compact('connaissances'));
    }
     
}
