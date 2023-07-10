<!DOCTYPE html>
<html lang="en">
<head>
   @yield('meta')

   @yield('title')
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Titillium+Web:ital,wght@0,400;0,700;1,400&display=swap')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <ul class="nav-list">
                    <span class="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                    <li class="nav-item">
                        <a href="{{route('Acceuil')}}">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">inscription</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('espacepublic')}}">Forum</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="bar-icon" id="iconBar" onclick ="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">My Forum</div>

        </div>
        <!--search box-->
        <div class="search-box">
            <div>
                <select name=" " id="">
                    <option value="Everything">Everything</option>
                    <option value="titles">Titles</option>
                    <option value="descriptions">Descriptions</option>
                    <input type="text" name="q" id="" placholder="search ...">
                    <button><i class="fa fa-search"></i></button>
                </select>
            </div>
            
        </div>
    </header>
    
    <div class="container">
        @yield('content')
    </div>
    <!--Forum info-->
    <div class="forum-info">
        <div class="chart">
            My Forum - Stats &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <div>
            <!--<span><u>5,369 </u>Posts in <u>1,21</u>0 Topics by <u>45,214</u> Users</span>-->
            <!--<span>Latest Post: <b><a href="#">Random Post </a></b> on 15 Dec 2021 by <a href="">RandomUser</a></span>-->
        </div>
    </div>

    <footer>
        <span>&copy; &nbsp;Groupe 7| All rights Reserved.</span>
    </footer>


    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>