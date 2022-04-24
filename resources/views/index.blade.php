<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mercado</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon_home.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Mercado</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!-- Search widget-->
                <div class="col-lg-9">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Busca un producto!!" aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
                <!-- Search widget end  -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">Sign up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <!-- Side widgets-->
            <div class="col-lg-12">
                <!-- Categories widget-->
                <div class="card mb-12">
                    <div class="card-header">Categorias</div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-sm-2">
                              <ul class="list-unstyled mb-0">
                                  @foreach ($categorias as $categoria)
                                  <li><a href="{{ route('home') }}?categoria_id={{ $categoria->id }}">{{ $categoria }}</a></li>
                                  @endforeach
                              </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-12">
                    <!-- Nested row for non-featured blog product-->
                    <div class="row">
                        @foreach ($productos as $producto)
                        <div class="col-lg-4">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="{{ route('producto', $producto->id) }}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class=<"small text-muted">{{ $producto->created_at }}</div>
                                    <h2 class="card-title h4">{{ $producto->nombre }}</h2>
                                    <p class="card-text">{{ $producto->descripcion }}</p>
                                    <a class="btn btn-primary" href="{{ route('producto', $producto->id) }}">{{ $producto->precio }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">S8A Escalera - Barranco - Martinez &copy; Mercado 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts_home.js') }}"></script>
    </body>
</html>
