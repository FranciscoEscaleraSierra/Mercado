<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
<<<<<<< HEAD
        <title>Mercado</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon_home.ico') }}" />
        <!-- Bootstrap CSS (includes Bootstrap)-->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/usuarios.css') }}" rel="stylesheet" />
=======

        @yield('head')

>>>>>>> efbf0b3cae982e1976bdc6bda94dd0566a5deca8
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Mercado</a>
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                @section('search_widget')
                    @include('widgets.home_search')
                @show
>>>>>>> Stashed changes
=======
>>>>>>> efbf0b3cae982e1976bdc6bda94dd0566a5deca8
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

<<<<<<< HEAD
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">S8A Escalera - Barranco - Martinez &copy; Mercado 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/usuarios.js') }}"></script>
=======
>>>>>>> efbf0b3cae982e1976bdc6bda94dd0566a5deca8
    </body>
</html>