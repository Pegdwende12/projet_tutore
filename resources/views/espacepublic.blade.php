@extends('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection   

@section('title')
    <title>My forum</title>

@section('content')
    

    <div class="container">
        <div class="subforum">

            <div class="navigate">
                <span>
                    <a href="#"> My Forum - images</a> >>  
                    <a href="{{route('espacepublicVideo')}}" >Videos </a> >>
                    <a href="{{route('espacepublicResume')}}">Resume text</a> >>
                    <a href="{{route('espacepublicLien')}}">liens </a> >>
                    <button>
                       <a href="#">Poster une connaissance</a>  
                    </button>
                </span>
            </div>

            @foreach ($connaissances as $connaissance)
            <div class="subforum-title">
                <h1>{{$connaissance->matiere->nom_matiere}}</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="like-icon far fa-thumbs-up"></i>
                    <br>
                    <i class="far fa-thumbs-down"></i>
                </div>
                <div class="subforum-description subforum-column ">
                    <h1><a href="">{{ $connaissance->titre_connaiss }} </a></h1>
                    
                    <div >
                        <img src="{{$connaissance->img_connaiss}}" alt="image de la connaissance" class="zoomable" onclick="agrandir(event)">
                    </div>
                    
                </div>
                <div class="subforum-stats subforum-column center">
                    <span id="view-count">{{ $connaissance->nbr_vues }} </span>  vues
                    <span class="like-count" data-clicked="false">12 </span> likes
                </div>
                <div class="subforum-info subforum-column ">
                    <b><a href=""> Posté </a></b> par : 
                    @foreach ($connaissance->etudiants as $etudiant)
                    <a href="">{{$etudiant->nom_etudiant}} {{$etudiant->prenom_etudiant}}</a>
                    <br>
                    le<small>{{$etudiant->pivot->date_publication}}</small>
                    @endforeach
                </div>
            </div>

            @endforeach
        </div>


        


    </div>
@endsection