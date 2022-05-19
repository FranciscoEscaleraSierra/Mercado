<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mercado</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/categoria.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" />
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
                        <form method="POST" action="{{ route('start.search') }}">
                            @csrf
                            <input class="form-control" type="text" placeholder="Busca un producto!!" aria-label="Enter search term..." aria-describedby="button-search" name='nombre' value="{{ old('nombre') }}"/>
                            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                        </form>
                    </div>
                </div>
                <!-- Search widget end  -->
                @show
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row my-3">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <h2>Crear una nueva Categoria</h2>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <form method="POST" action="{{ route('supervisor.categorias.store') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                name="nombre"
                                class="form-control"
                                value="{{ old('nombre') }}"
                                id="floatingInput"
                                placeholder="Categoria"
                            >
                        </div>

                        <div class="form-check mb-3">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value="1"
                                checked="{{ old('activa') ? 'checked' : '' }}"
                                name="activa"
                                id="activa"
                            >
                            <label
                                class="form-check-label"
                                for="activa"
                            >
                                Activa
                            </label>
                        </div>
                        <div class="d-grid">
                            <button
                                class="btn btn-primary btn-login text-uppercase fw-bold"
                                type="submit"
                            >
                                Crear Categoria
                            </button>
                        </div>
                    </form>
                    {{-- <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesion</h5>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/categoria.js') }}"></script>
    </body>
</html>
