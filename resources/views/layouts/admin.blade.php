<html>
    <head>
        <title>Bigscreen</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
        @section('sidebar')
            
        @show
 
        <div class="cont container-fluid">
            
            @include('admin.nav_bar_laravel')
            <div class="row">
                <nav id="menu_container" class="col-3">
                    @include('menu.menu_admin')
                </nav>
                <div class="col-12 col-md-9">
                    @yield('content')
                </div>
            </div>
            
        </div>
    </body>

</html>