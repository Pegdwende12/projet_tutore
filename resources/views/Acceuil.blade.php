<!DOCTYPE html>
<html lang="en">
<head>

    <title>My forum</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Titillium+Web:ital,wght@0,400;0,700;1,400&display=swap')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
</head>
<body>
        <div class="container-fluid">
        <!-- Background animtion-->
            <div class="background">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>


    <header>
        <div class="navbar">
            <nav >
                <ul >
                    
                    <li class="nav-item">
                        <a href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Inscription</a>
                    </li>
                </ul>
            </nav>
            

        </div>

            <section class="header-content">
                <h1>Bienvenue</h1>
                <p> Bienvenue sur le forum de discussion. Partagez vos connaissances
                     et tirez parti des connaissances de vos camarades</p>
                <button>
                    <a href="#">Rejoindre la discussion</a>
                </button>
                
            </section>
       
    </header>
    

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>