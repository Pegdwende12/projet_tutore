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
                    <a href="#"> My Forum - images</a>  
                    <a href="#">Videos</a> 
                    <a href="#">Resume text</a> >>
                    <a href="#">liens </a> 
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
                    <i class="like-icon far fa-thumbs-up"></i>
                    <br>
                    <i class="far fa-thumbs-down"></i>
                </div>
                <div class="subforum-description subforum-column ">
                    <h1><a href="">titre de la connaissance: </a></h1>
                    
                    <div >
                        <img src="https://1.cms.s81c.com/sites/default/files/2021-04-15/ICLH_Diagram_Batch_01_03-DeepNeuralNetwork-WHITEBG.png" alt="image de la connaissance" class="zoomable" onclick="agrandir(event)">
                    </div>
                    
                </div>
                <div class="subforum-stats subforum-column center">
                    <span id="view-count">12 </span>  vues
                    <span class="like-count" data-clicked="false"> 1 </span> likes
                </div>
                <div class="subforum-info subforum-column ">
                    <b><a href=""> Posté </a></b> par <a href="">Nom de l'etudiant</a>
                    <br>
                    le<small>date  et l'heure a laquelle il a posté</small>
                </div>
            </div>


            <div class="subforum-title">
                <h1>Nom de la matiere</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="like-icon far fa-thumbs-up" ></i>
                    <br>
                    <i class="far fa-thumbs-down"></i>
                </div>
                <div class="subforum-description subforum-column ">
                    <h1><a href="">titre de la connaissance: </a></h1>
                    
                    <div >
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCcjqdJDVQUjZCy_zsZK3ZaabS3TJ_dYBo0766NYEq-Slz6NX4UcdXjueucT-IpYRI9js&usqp=CAU" alt="image de la connaissance" class="zoomable" onclick="agrandir(event)">
                    </div>
                    
                </div>
                <div class="subforum-stats subforum-column center">
                    <span id="view-count">12 </span>  vues
                    <span class="like-count" data-clicked="false"> 2 </span> likes
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