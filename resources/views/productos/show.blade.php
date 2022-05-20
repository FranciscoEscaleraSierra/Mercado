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
                        <li class="nav-item"><a class="nav-link" href="/login">Entrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="/register">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">{{ $producto->created_at }}</div>
                        <h1 class="display-5 fw-bolder">{{ $producto->nombre }}</h1>
                        <div class="fs-5 mb-5">
                            <!-- <span class="text-decoration-line-through">$45.00</span> -->
                            <span>${{ $producto->precio * 100}}</span>
                        </div>
                        <p class="lead">{{ $producto->descripcion }}</p>
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        </br>
                            <a href="{{ route('cliente.productos.comprar', [$producto->id, 'pago' => 0]) }}">
                                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    Compra electronica
                                </button>
                            </a>
                            <a href="{{ route('cliente.productos.comprar', [$producto->id, 'pago' => 1]) }}">
                                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    Pago en ventanilla
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/producto.js') }}"></script>
    </body>
</html>
