<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connaissance;
class Connaissancevideo extends Controller
{
    //
    public function index(){

        $connaissances = Connaissance::with(['etudiants','matiere','publications'])->whereNotNull('video_connaiss')->get();
        return view('espacepublicVideo', compact('connaissances'));
    }
}
