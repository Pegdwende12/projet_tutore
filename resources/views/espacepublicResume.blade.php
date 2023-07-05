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
                    <a href="{{route('espacepublic')}}">My Forum - images</a> >> 
                    <a href="{{route('espacepublicVideo')}}">Videos</a>>> 
                    <a href="#">Resume text</a> >> 
                    <a href="{{route('espacepublicLien')}}">liens </a> 
                    <button>
                        <a href="#">Poster une connaissance</a>  
                    </button>
            </span>
            </div>

            <div class="subforum-title">
                <h1>Nom de la matiere</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="far fa-thumbs-up"></i>
                    <br>
                    <i class="far fa-thumbs-down"></i>
                </div>
                <div class="subforum-description subforum-column ">
                    <h1><a href="">titre de la connaissance: </a></h1>
                    <p>resume de texte.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus corporis sed, amet odit similique quia nobis autem adipisci beatae voluptatibus sint voluptatem quisquam ratione necessitatibus nam sequi maiores eius. Ex.
                    </p>
                    
                </div>
                <div class="subforum-stats subforum-column center">
                    <span id="view-count">12 </span>  vues
                    <span id="like-count"> 14 </span> likes
                </div>
                <div class="subforum-info subforum-column ">
                    <b><a href=""> Posté </a></b> par <a href="">Nom de l'etudiant</a>
                    <br>
                    le<small>date  et l'heure a laquelle il a posté</small>
                </div>
            </div>


            

            
        </div>


    </div>
@endsection