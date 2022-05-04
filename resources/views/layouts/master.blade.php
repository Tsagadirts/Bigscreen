<html>

    <head>
        <title>Bigscreen</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" >
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body>
        @section('sidebar')
            
        @show
 
        <div class="container">
            <nav>
                @include('menu.menu_admin')
            </nav>
            @yield('content')
        </div>
    </body>

</html>