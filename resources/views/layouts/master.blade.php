<html>

    <head>
        <title>Bigscreen</title>
    </head>

    <body>
        @section('sidebar')
            
        @show
 
        <div class="container">
            {{-- <nav>
                @include('menu.index')
            </nav> --}}
            @yield('content')
        </div>
    </body>

</html>