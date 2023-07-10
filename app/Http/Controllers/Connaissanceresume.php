<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connaissance;
class Connaissanceresume extends Controller
{
    //
    public function index(){

        $connaissances = Connaissance::with(['etudiants','matiere','publications'])->whereNotNull('resume_connaiss')->get();
        return view('espacepublicResume', compact('connaissances'));
    }
}
