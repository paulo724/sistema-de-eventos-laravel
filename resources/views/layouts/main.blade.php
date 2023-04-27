<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link href="/css/style.css" rel="stylesheet" />
    <script src="/js/script.js"></script>

    <!-- css boatstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">



</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid" id="navbar">
                <ul class="navbar-nav">
                    <a class="navbar-brand" href="#">
                        <img src="/img/logo.jpg" alt="" width="40" height="40" style="border-radius: 10px;" class="rounded-pill">
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events/create">Criar Evento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>


    </header>
    @yield('content')
    <footer>PH events &copy; 2023</footer>
    <!-- Ion Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>