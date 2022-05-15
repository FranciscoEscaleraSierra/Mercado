<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Mercado</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/inicio.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/producto.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('start') }}">Mercado</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                @section('search_widget')
                <!-- Search widget-->
                <div class="col-lg-9">
                    <div class="input-group">
                        <form method="POST" action="{{ route('categorias.productos.search', ['categoria' => $categoria->id]) }}">
                            @csrf
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Busca un producto!!"
                                aria-label="Enter search term..."
                                aria-describedby="button-search"
                                name='nombre'
                                value="{{ \Request::input('nombre') }}"
                            />
                            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                        </form>
                    </div>
                </div>
                <!-- Search widget end  -->
                @show
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/login">Entrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="/register">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-12">
                <!-- Nested row for non-featured blog product-->
                <div class="row">
                    @foreach ($productos as $producto)
                    <div class="col-lg-4">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="{{ route('productos.show', $producto->id) }}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class=<"small text-muted">{{ $producto->created_at }}</div>
                                <h2 class="card-title h4">{{ $producto->nombre }}</h2>
                                <p class="card-text">{{ $producto->descripcion }}</p>
                                <a class="btn btn-primary" href="{{ route('productos.show', $producto->id) }}">${{ $producto->precio * 100 }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/usuarios.js') }}"></script>
    </body>
</html>
