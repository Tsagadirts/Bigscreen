<html>

    <head>
        <title>Bigscreen</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    </head>

    <body>
        @section('sidebar')
            
        @show
 
        <div class="container">
            <nav>
                @include('menu.admin')
            </nav>
            @yield('content')
        </div>
    </body>

</html>