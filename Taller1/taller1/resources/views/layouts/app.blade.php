<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
        @yield('sectioncss','')
        <title>@yield('title', 'Bike Store')</title>
    </head>
    <body>
        <nav id="app_nav"> 
            <a href="{{ route('bike.home')}}">
                <div class="nav_option">
                    <p class="nav_opt_text"> Home</p>
                </div>
            </a>
            <a href="{{ route('bike.showAll')}}">
                <div class="nav_option">
                    <p class="nav_opt_text"> Bikes</p>
                </div>
            </a>
            <a href="{{ route('bike.create')}}">
                <div class="nav_option">
                    <p class="nav_opt_text"> Add Bike </p>
                </div>
            </a>
            <a>
                <div class="nav_option">
                    <p class="nav_opt_text"> Option </p>
                </div>
            </a>
        </nav>

        <div id="title_container">
            <h1 id="title"> @yield('textTitle', 'Bike Store') </h1>
            @yield('subTitle', '')
        </div>
            
        @yield('content', '')
        <footer id="app_footer">
            <div id="footer_container">
                <p id="footer_text"> App developed by Julian Giraldo Perez</p>
            </div>
        </footer>
    </body>
</html>