<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connaissance;
class Connaissancelien extends Controller
{
    //
    public function index(){

        $connaissances = Connaissance::with(['etudiants','matiere','publications'])->whereNotNull('lien_connaiss')->get();
        return view('espacepublicLien', compact('connaissances'));
    }
}
